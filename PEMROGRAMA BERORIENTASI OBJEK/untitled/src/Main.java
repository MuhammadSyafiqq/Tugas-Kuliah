import java.util.Scanner;

class Akun {
    private String username;
    private String password;

    public void display() {
        Scanner input = new Scanner(System.in);
        int pilihan;

        do {
            System.out.println("\n1. REGISTER");
            System.out.println("2. LOGIN");
            System.out.print("Masukkan Pilihan: ");
            pilihan = input.nextInt();

            switch (pilihan) {
                case 1:
                    input();
                    break;

                case 2:
                    login();
                    break;

                default:
                    System.out.println("Pilihan tidak valid. Silakan coba lagi.");
            }
        } while (pilihan != 2);
    }

    public void input() {
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan Username: ");
        username = input.next();
        System.out.print("Masukkan Password: ");
        password = input.next();
        System.out.println("Berhasil Daftar");
    }

    public void login() {
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan Username: ");
        String user = input.next();
        System.out.print("Masukkan Password: ");
        String pass = input.next();

        if (username.equals(user) && password.equals(pass)) {
            System.out.println("Login Berhasil");
        } else {
            System.out.println("Login Gagal");
        }
    }
}

public class Main {
    public static void main(String[] args) {
        Akun x = new Akun();
        x.display();
    }
}
