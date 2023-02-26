/*
    Saya Achmad Fauzan NIM 2108061 mengerjakan soal Latihan Praktikum 2 dalam mata
    kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya
    tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

#include "Mahasiswa.cpp"

int main()
{
    // deklarasi vector untuk menampung kumpulan objek mahasiswa
    vector<Mahasiswa> v;

    // masukkan beberapa objek mahasiswa ke dalam vector
    v.push_back(Mahasiswa("314159265", "Ojan", "Cowok", "Hogwarts", "ojan@upi.edu", "2108061", "Ilmu Komedi", "Fak"));
    v.push_back(Mahasiswa("1234", "Bintang", "Ciwi", "UBI", "bintung@ubi.edu", "2102665", "Ilmu Komedi", "FPAOWKWK"));
    v.push_back(Mahasiswa("0000", "Yasin", "LAKIK", "Harvard", "yasin@hard.edu", "2100137", "Ilmu Kompor", "FPTK"));

    // tampilkan semua atribut dari elemen di dalam vector
    for (Mahasiswa m : v)
    {
        cout << "NIK                : " << m.getNIK() << endl;
        cout << "Nama               : " << m.getNama() << endl;
        cout << "Jenis Kelamin      : " << m.getJenkel() << endl;
        cout << "Asal Universitas   : " << m.getAsalUniv() << endl;
        cout << "Email Education    : " << m.getEmailEdu() << endl;
        cout << "NIM                : " << m.getNIM() << endl;
        cout << "Program Studi      : " << m.getProdi() << endl;
        cout << "Fakultas           : " << m.getFakultas() << endl;
        cout << endl;
    }

    return 0;
}