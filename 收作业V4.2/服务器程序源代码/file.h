#include <stdlib.h> 
//int ת string
string ItoS(int i){
	string str;
	stringstream ss;
	ss << i;
	str = ss.str();
	return str;
}
int StoI(string str){
	return atoi(str.c_str());
}

//�ƶ� addr1->addr2+name
bool move(string addr1,string addr2,string name){
	CreateDirectory(TEXT(addr2.c_str()), NULL);//�����ļ���
	return (bool)MoveFile(TEXT(addr1.c_str()), TEXT((addr2 + "\\" + name).c_str()));//�ƶ�
}

//��ȡ�ļ��б�,��һ�������ǵ�ַ���ڶ����������ļ�������
int getlist(string addr,string *name){
	WIN32_FIND_DATA  FindFileData;
	HANDLE hFind;
	string temp;
	int num=0;
	// ��ʼ����
	addr += "\\*.*";
	hFind = FindFirstFile(TEXT(addr.c_str()), &FindFileData);
	if (hFind == INVALID_HANDLE_VALUE){
		num = 0;
		return NULL;
	}
	else{
		do{
			temp = TEXT(FindFileData.cFileName);
			if (temp == "." || temp == ".."||temp=="list.txt") continue;
			name[num++] = temp;
		} while (FindNextFile(hFind, &FindFileData) != 0);
	}
	// ���ҽ���
	FindClose(hFind);
	return num;

}

//�ַ����ڼ��ϣ�
bool strin(string str, string *strs, int n){
	for (int i = 0; i < n; i++){
		if (strs[i].find(str) != string::npos){
			return true;
		}
	}
	return false;
}