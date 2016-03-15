#include <stdlib.h> 
//int 转 string
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

//移动 addr1->addr2+name
bool move(string addr1,string addr2,string name){
	CreateDirectory(TEXT(addr2.c_str()), NULL);//创建文件夹
	return (bool)MoveFile(TEXT(addr1.c_str()), TEXT((addr2 + "\\" + name).c_str()));//移动
}

//获取文件列表,第一个参数是地址，第二个参数是文件名数组
int getlist(string addr,string *name){
	WIN32_FIND_DATA  FindFileData;
	HANDLE hFind;
	string temp;
	int num=0;
	// 开始查找
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
	// 查找结束
	FindClose(hFind);
	return num;

}

//字符串在集合？
bool strin(string str, string *strs, int n){
	for (int i = 0; i < n; i++){
		if (strs[i].find(str) != string::npos){
			return true;
		}
	}
	return false;
}