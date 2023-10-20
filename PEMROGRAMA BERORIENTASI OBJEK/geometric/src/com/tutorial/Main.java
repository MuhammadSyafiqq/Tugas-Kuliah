package com.tutorial;

class Geometric{
    int alas;
    int tinggi;
    int sisi;
    int r;
    double phi;
 
    void luasLingkaran(){
        double luas;
        luas = phi *( r * r);
        System.out.println("Luas Lingkaran adalah = " +luas);
    }
    void kelLingkaran(){
        double kel;
        kel = phi *(2 * r);
        System.out.println("Keliling Lingkaran adalah = " +kel);
    }
}
public class Main{
    public static void main(String[] args) {
        System.out.println("SEGITIGA");
        System.out.println("===========================");
        
        int luasSegitiga = Segitiga.luasSegitiga(5, 4);
        System.out.println("Luas Segitiga  = "+ luasSegitiga);

        int KelSegitiga = Segitiga.KelSegitiga(5);
        System.out.println("Keliling Segitiga  "+KelSegitiga);
        System.out.println(" ");
        System.out.println("=====================================");

        System.out.println("LINGKARAN");
        Geometric luasLingkaran = new Geometric();
        luasLingkaran.r = 10;
        luasLingkaran.phi = 3.14;
        luasLingkaran.luasLingkaran();
        
        Geometric kelLingkaran = new Geometric();
        kelLingkaran.r = 10;
        kelLingkaran.phi = 3.14;
        kelLingkaran.kelLingkaran();
        System.out.println("================================");
        System.out.println();



    }
}