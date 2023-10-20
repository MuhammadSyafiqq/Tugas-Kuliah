// Class utama untuk merepresentasikan Karyawan
class Karyawan {
    private String nama;
    private String NIK;

    public Karyawan(String nama, String NIK) {
        this.nama = nama;
        this.NIK = NIK;
    }

    public String getNama() {
        return nama;
    }

    public String getNIK() {
        return NIK;
    }

    public double hitungGaji() {
        return 0; // Metode ini akan di-override di subclass
    }
}

// Subclass untuk KaryawanEdukatif
class KaryawanEdukatif extends Karyawan {
    private String NIDN;
    private double gajiTetap;
    private double honor;
    private double tunjangan;

    public KaryawanEdukatif(String nama, String NIK, String NIDN, double gajiTetap, double honor, double tunjangan) {
        super(nama, NIK);
        this.NIDN = NIDN;
        this.gajiTetap = gajiTetap;
        this.honor = honor;
        this.tunjangan = tunjangan;
    }

    public String getNIDN() {
        return NIDN;
    }

    @Override
    public double hitungGaji() {
        return gajiTetap + honor + tunjangan;
    }
}

// Subclass untuk KaryawanNonEdukatif
class KaryawanNonEdukatif extends Karyawan {
    private double gajiTetap;
    private double honorKehadiran;
    private double uangLembur;

    public KaryawanNonEdukatif(String nama, String NIK, double gajiTetap, double honorKehadiran, double uangLembur) {
        super(nama, NIK);
        this.gajiTetap = gajiTetap;
        this.honorKehadiran = honorKehadiran;
        this.uangLembur = uangLembur;
    }

    @Override
    public double hitungGaji() {
        return gajiTetap + honorKehadiran + uangLembur;
    }
}

public class Main {
    public static void main(String[] args) {

        KaryawanEdukatif karyawan1 = new KaryawanEdukatif("Muhammad Syafiq Zhalifunnas", "14010101150740001", "NIDN123", 4000000, 200000, 500000);
        KaryawanNonEdukatif karyawan2 = new KaryawanNonEdukatif("Ivan Dhany ", "1401011508400001", 1500000, 200000, 100000);

        System.out.println("Gaji " + karyawan1.getNama() + ": " + karyawan1.hitungGaji());
        System.out.println("Gaji " + karyawan2.getNama() + ": " + karyawan2.hitungGaji());
    }
}
