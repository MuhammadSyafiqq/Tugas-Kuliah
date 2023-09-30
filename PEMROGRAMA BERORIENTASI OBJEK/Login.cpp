#include <iostream>

using namespace std;

class akun{
	public:
		void display();
		void input();
		void login();
		
	private:
		string username;
		string password;
		int pilihan;
		string user;
		string pass;
};

void akun::display(){
	cout<<endl;
	cout<<"1.REGISTER"<<endl;
	cout<<"2.LOGIN"<<endl;
	cout<<"Masukkan Pilihan"<<endl;
	cin>>pilihan;
	switch(pilihan){
		case 1:
			akun::input();
			akun::display();
			break;
			
		case 2:
			akun::login();
			break;
	}
	
}

void akun::input(){
	cout<<"Masukkan Username : ";
	cin>>user;
	cout<<"Masukkan Password : ";
	cin>>pass;
	cout<<"Berhasil Daftar";
}
void akun::login(){
	cout<<"Masukkan Username :";
	cin>>user;
	cout<<"Masukkan Password :";
	cin>>password;
	if(username==user&& password==pass){
		cout<<"Login Berhasil";
	}
	else {
		cout<<"Login Gagal";
	}
}

int main(){
	akun x;
	x.display();
	return 0;
	
}
