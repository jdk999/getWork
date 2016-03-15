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
		//移动文件
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
		//统计

		ofstream fout(addr + "\\mlist.txt");
		SYSTEMTIME sys;
		GetLocalTime(&sys);
		fout << "Last update:" << sys.wYear << "-" << sys.wMonth << "-" << sys.wDay << " " << sys.wHour << ":" << sys.wMinute << ":" << sys.wSecond << endl;// "秒" << sys.wMilliseconds << "毫秒" << endl;
		fout.close();
		string subject[10];//科目名
		string all_addr = addr + "\\all";
		int m = getlist(all_addr, subject);//获取科目列表
		sub *q;
		for (int i = 0; i < m; i++){
			q = new sub(subject[i], all_addr);
			q->print(addr + "\\mlist.txt");
			delete q;
		}
		//cout << "更新完毕：" << sys.wYear << "年" << sys.wMonth << "月" << sys.wDay << "日" << sys.wHour << "时" << sys.wMinute << "分" << sys.wSecond << "秒" << sys.wMilliseconds << "毫秒" << endl;
		system("cls");
		cout << "Last update:" << sys.wYear << "-" << sys.wMonth << "-" << sys.wDay << " " << sys.wHour << ":" << sys.wMinute << ":" << sys.wSecond << endl;
		cout << "Data update..." << endl;
		Sleep(10000);//暂停10秒
		

	}
	return 0;
}