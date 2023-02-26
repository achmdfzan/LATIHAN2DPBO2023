<?php

/*
    Saya Achmad Fauzan NIM 2108061 mengerjakan soal Latihan Praktikum 2 dalam mata
    kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya
    tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
*/

include "Mahasiswa.php";

// deklarasi array untuk menampung kumpulan objek Mahasiswa
$v = array();

// tambahkan beberapa objek mahasiswa ke dalam array
array_push($v, new Mahasiswa("314159265", "Ojan", "Cowok", "Hogwarts", "ojan@upi.edu", "2108061", "Ilmu Komedi", "Fak"));
array_push($v, new Mahasiswa("1234", "Bintang", "Ciwi", "UBI", "bintung@ubi.edu", "2102665", "Ilmu Komedi", "FPAOWKWK"));
array_push($v, new Mahasiswa("0000", "Yasin", "LAKIK", "Harvard", "yasin@hard.edu", "2100137", "Ilmu Kompor", "FPTK"));

// tampilkan semua atribut dari elemen di dalam array
foreach ($v as $m)
{
    echo "NIK              : " . $m->getNIK() . "<br>";
    echo "Nama             : " . $m->getNama() . "<br>";
    echo "Jenis Kelamin    : " . $m->getJenkel() . "<br>";
    echo "Asal Universitas : " . $m->getAsalUniv() . "<br>";
    echo "Email Education  : " . $m->getEmailEdu() . "<br>";
    echo "NIM              : " . $m->getNIM() . "<br>";
    echo "Program Studi    : " . $m->getProdi() . "<br>";
    echo "Fakultas         : " . $m->getFakultas() . "<br>";
    echo "<hr>";
}

?>