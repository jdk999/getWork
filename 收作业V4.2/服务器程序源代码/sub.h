class sub{
private:
	string subname;//��Ŀ��
	string addr;
	string sname[40];//ѧ����
	int sn;
	string time[20];
	int tn;
	int num[20];//��ҵ����,0�����ޣ�1������
	int A[20][40];//����20����ҵ��40��Ͱ
public:
	sub(string m_subname,string m_addr){
		subname = m_subname;
		addr = m_addr + "\\" + m_subname;
		ifstream fin((addr + "\\list.txt").c_str());
		//��ȡѧ����
		sn = 0;
		while (!fin.eof()){
			fin>>sname[sn];
			sn++;
		}
		fin.close();
		//��ȡ������������
		tn = getlist(addr, time);
		//��ʼ����ҵ����
		memset(num, 0, sizeof(num));
		for (int i = 0; i < tn; i++){
			num[StoI(time[i])] = 1;
		}
		memset(A, 0, sizeof(A));

		//���Ͱ
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
		fout << "������ [" << subname << "] ����ҵ���:" << endl;
		for (int i = 0; i < 20; i++){
			if (num[i] == 0) continue;
			fout << "**=" << endl;
			fout << "ʵ��(��ҵ) " << i << " δ����������:" << endl;
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