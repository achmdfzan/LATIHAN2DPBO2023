/*
    Saya Achmad Fauzan NIM 2108061 mengerjakan soal Latihan Praktikum 2 dalam mata
    kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya
    tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

import java.util.ArrayList;

public class Main
{
    public static void main(String[] args)
    {
        // Buat arraylist untuk menampung mahasiswa
        ArrayList<Mahasiswa> al = new ArrayList<Mahasiswa>();

        // Tambahkan beberapa data mahasiswa ke dalam arraylist
        al.add(new Mahasiswa("314159265", "Ojan", "Cowok", "Hogwarts", "ojan@hog.edu", "2108061", "Ilmu Komedi", "Fak"));
        al.add(new Mahasiswa("1234", "Bintang", "Ciwi", "UBI", "bintung@ubi.edu", "2102665", "Ilmu Komedi", "FPAOWKWK"));
        al.add(new Mahasiswa("0000", "Yasin", "LAKIK", "Harvard", "yasin@hard.edu", "2100137", "Ilmu Kompor", "FPTK"));

        // Print semua isi arraylist
        for (Mahasiswa m : al)
        {
            System.out.println("NIK                 : " + m.getNIK());
            System.out.println("Nama                : " + m.getNama());
            System.out.println("Jenis Kelamin       : " + m.getJenkel());
            System.out.println("Asal Universitas    : " + m.getAsalUniv());
            System.out.println("Email Education     : " + m.getEmailEdu());
            System.out.println("NIM                 : " + m.getNIM());
            System.out.println("Program Studi       : " + m.getProdi());
            System.out.println("Fakultas            : " + m.getFakultas());
            System.out.println("");
        }
    }
}
