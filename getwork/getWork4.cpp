#include <iostream>
#include <fstream>
#include <sstream>
#include <stdlib.h>
#include <string>
#include <dirent.h>
#include <sys/types.h>
#include <unistd.h>
#include <time.h>
#include "getDir.cpp"
#include "Subject.cpp"

using namespace std;

string subNameAtList[10];//list.txt中科目名
int subNum=0;

//初始化
void start(){
	time_t t;
	time(&t);
	
	cout<<"更新时间："<<ctime(&t)<<"初始化开始..."<<endl;
	
	//初始化上传目录
	system("mkdir upFile");
	
	//初始化未知格式文件目录
	system("mkdir other");
	
	//初始化总目录
	system("mkdir all");
	
	//初始化科目表
	system("touch subject.txt");
	
	//初始化输出名单
	system("touch mlist.txt");
	
	ifstream fin("subject.txt");
	//读取科目表到subNameAtList,并创建科目目录
	string tempShell="";
	while(!fin.eof()){
		fin>>subNameAtList[subNum++];
		//cout<<subNameAtList[subNum-1]<<endl;
		tempShell="mkdir all/"+subNameAtList[subNum-1];
		system(tempShell.c_str());
		}
	//cout<<subNum<<endl;
	fin.close();
	
	cout<<"初始化结束..."<<endl;
	}

bool haveSub(string subName){
	cout<<subName<<endl;
	for(int i=0;i<subNum;i++){
		if(subName.compare(subNameAtList[i])==0)
			return true;
		}
	return false;
	}
	

void moveFile(){
	string addr="upFile";
	string fileName[200];//待处理的文件名数组
	int fileNum=getDir(addr,fileName);//处理初始化
	//顺序处理文件
	string id;//学号
	string name;//姓名
	string subName="";//科目名
	string time="";//次数
	
	string toThis;//目标目录
	string tempShell="";
	//强插次数可以，不可强插科目
	for(int i=0;i<fileNum;i++){
		cout<<"检测到文件："<<fileName[i];
		//拆分
		istringstream iss(fileName[i]);//定义流
		getline(iss, id, '-');
		getline(iss, name, '-');
		getline(iss, subName, '-');
		getline(iss, time, '.');
		
		if(!haveSub(subName)){
			tempShell="mv -f ";
			tempShell=tempShell+addr+"/"+fileName[i]+" other/"+fileName[i];
			system(tempShell.c_str());
			cout<<" 未知分类，已移动至other文件夹"<<endl;
			continue;
			}

		toThis="all/";
		toThis=toThis+subName+"/"+time;
		tempShell="mkdir ";
		tempShell+=toThis;
		system(tempShell.c_str());//创建目录
		
		tempShell="mv -f ";
		tempShell=tempShell+addr+"/"+fileName[i]+" "+toThis+"/"+fileName[i];
		system(tempShell.c_str());
		cout<<" 移动成功"<<endl;
		}
	}
int main(){
	
	//初始化
	start();

	//开始工作
	while(true){
		
		ofstream fout("mlist.txt");
		time_t t;
		time(&t);
		fout<<"更新时间："<<ctime(&t);
		fout.flush();
		fout.close();
		//fout<<""
		//提示信息
		moveFile();
		Subject *q;
		for (int i = 0; i < subNum; i++){
			if(subNameAtList[i]=="") continue;
			q = new Subject(subNameAtList[i]);
			q->print("mlist.txt");
		}
		cout<<"ok"<<endl;
		sleep(5);
		
		}
	return 0;
}
