class sub{
private:
	string subname;//科目名
	string addr;
	string sname[40];//学生名
	int sn;
	string time[20];
	int tn;
	int num[20];//作业次数,0代表无，1代表有
	int A[20][40];//矩阵，20次作业，40个桶
public:
	sub(string m_subname,string m_addr){
		subname = m_subname;
		addr = m_addr + "\\" + m_subname;
		ifstream fin((addr + "\\list.txt").c_str());
		//获取学生名
		sn = 0;
		while (!fin.eof()){
			fin>>sname[sn];
			sn++;
		}
		fin.close();
		//获取次数及次数名
		tn = getlist(addr, time);
		//初始化作业矩阵
		memset(num, 0, sizeof(num));
		for (int i = 0; i < tn; i++){
			num[StoI(time[i])] = 1;
		}
		memset(A, 0, sizeof(A));

		//填充桶
		for (int i = 0; i < 20; i++){
			if (num[i] == 0) continue;
			string wname[60];
			int wn = getlist(addr + "\\" + ItoS(i), wname);
			for (int j = 0; j < sn; j++){
				A[i][j] = strin(sname[j], wname, wn) ? 1 : 0;
			}
		}
	}
	void print(string outfile){
		ofstream fout(outfile,ios_base::out|ios_base::app);
		fout << endl;
		fout << "*=" << endl;
		fout << "以下是 [" << subname << "] 收作业情况:" << endl;
		for (int i = 0; i < 20; i++){
			if (num[i] == 0) continue;
			fout << "**=" << endl;
			fout << "实验(作业) " << i << " 未交名单如下:" << endl;
			for (int j = 0; j < sn; j++){
				if (A[i][j] == 0){
					fout << sname[j] << '\t';
				}
			}
			fout << endl;
			fout << endl;
		}
		fout.close();
	}


};