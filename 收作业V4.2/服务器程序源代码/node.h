

class node{
private:
	string id;//学号
	string name;//姓名
	string type;//类型
	int num;//次数
	string addr;
	string fname;
public:

	//由文件名作为构造函数
	node(string m_fname,string m_addr){
		fname = m_fname;
		istringstream iss(fname);//定义流
		getline(iss, id, '-');
		getline(iss, name, '-');
		getline(iss, type, '-');
		iss >> num;
		addr = m_addr;
	}

	//传送
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
