#undef UNICODE
#include <iostream>
#include <fstream>
#include <string>
#include <windows.h>
#include<shlobj.h>
#include <direct.h>
#include <sstream>
using namespace std;
#include "file.h"
#include "node.h"
#include "sub.h"


int main(){
	while (true){
		//�ƶ��ļ�
		string name[256];
		node *s;
		string addr = _getcwd(NULL, 0);
		string temp_addr = addr + "\\UpFile";
		int n = getlist(temp_addr, name);
		for (int i = 0; i < n; i++){
			s = new node(name[i], addr);
			s->Delivery();
			delete s;
		}
		//ͳ��

		ofstream fout(addr + "\\mlist.txt");
		SYSTEMTIME sys;
		GetLocalTime(&sys);
		fout << "Last update:" << sys.wYear << "-" << sys.wMonth << "-" << sys.wDay << " " << sys.wHour << ":" << sys.wMinute << ":" << sys.wSecond << endl;// "��" << sys.wMilliseconds << "����" << endl;
		fout.close();
		string subject[10];//��Ŀ��
		string all_addr = addr + "\\all";
		int m = getlist(all_addr, subject);//��ȡ��Ŀ�б�
		sub *q;
		for (int i = 0; i < m; i++){
			q = new sub(subject[i], all_addr);
			q->print(addr + "\\mlist.txt");
			delete q;
		}
		//cout << "������ϣ�" << sys.wYear << "��" << sys.wMonth << "��" << sys.wDay << "��" << sys.wHour << "ʱ" << sys.wMinute << "��" << sys.wSecond << "��" << sys.wMilliseconds << "����" << endl;
		system("cls");
		cout << "Last update:" << sys.wYear << "-" << sys.wMonth << "-" << sys.wDay << " " << sys.wHour << ":" << sys.wMinute << ":" << sys.wSecond << endl;
		cout << "Data update..." << endl;
		Sleep(10000);//��ͣ10��
		

	}
	return 0;
}