

class node{
private:
	string id;//ѧ��
	string name;//����
	string type;//����
	int num;//����
	string addr;
	string fname;
public:

	//���ļ�����Ϊ���캯��
	node(string m_fname,string m_addr){
		fname = m_fname;
		istringstream iss(fname);//������
		getline(iss, id, '-');
		getline(iss, name, '-');
		getline(iss, type, '-');
		iss >> num;
		addr = m_addr;
	}

	//����
	bool Delivery(){
		if(move(addr + "\\UpFile\\" + fname, addr + "\\all\\" + type + "\\" + ItoS(num), fname)){
			return true;
		}
		else{
			move(addr + "\\UpFile\\" + fname, addr + "\\other", fname);
			return false;
		}
	}
};
