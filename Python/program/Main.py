
#   Saya Achmad Fauzan NIM 2108061 mengerjakan soal Latihan Praktikum 2 dalam mata
#   kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya
#   tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

from Mahasiswa import Mahasiswa

# deklarasi list untuk menampung kumpulan objek Mahasiswa
v = []

# tambahkan beberapa objek Mahasiswa ke dalam list
v.append(Mahasiswa("314159265", "Ojan", "Cowok", "Hogwarts", "ojan@upi.edu", "2108061", "Ilmu Komedi", "Fak"))
v.append(Mahasiswa("1234", "Bintang", "Ciwi", "UBI", "bintung@ubi.edu", "2102665", "Ilmu Komedi", "FPAOWKWK"))
v.append(Mahasiswa("0000", "Yasin", "LAKIK", "Harvard", "yasin@hard.edu", "2100137", "Ilmu Kompor", "FPTK"))

# tampilkan semua atribut dari elemen di dalam list
for m in v:

    print("NIK              : " + m.getNIK())
    print("Nama             : " + m.getNama())
    print("Jenis Kelamin    : " + m.getJenkel())
    print("Asal Universitas : " + m.getAsalUniv())
    print("Email Education  : " + m.getEmailEdu())
    print("NIM              : " + m.getNIM())
    print("Program Studi    : " + m.getProdi())
    print("Fakultas         : " + m.getFakultas())
    print()