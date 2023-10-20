package com.tutorial;

class Segitiga extends Geometric{
    public static int luasSegitiga(int alas,int tinggi){
        return alas * tinggi / 2;
    }

    public static int KelSegitiga(int sisi){
        return sisi + sisi + sisi;
    }

    @Override
    public String toString() {
        return "Segitiga []";
    } 
    
}