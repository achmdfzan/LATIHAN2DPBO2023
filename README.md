# LATIHAN2DPBO2023

Terdapat 3 kelas dalam program ini, setiap class memiliki hubungan Multi-level inheritance.
Berikut class-class yang terdapat dalam program ini:
#### 1. Class Human
  Class ini berisi NIK, Nama, dan Jenis Kelamin. Atribut-atribut tersebut memiliki access modifier protected agar bisa diakses langsung di dalam child class.
  Class ini berada di atas hierarki pewarisan. Artinya class ini tidak memiliki parent class dan hanya memiliki child class (SivitasAkademik).
#### 2. Class SivitasAkademik
  Class ini berisi Asal Universitas dan Email Edu, Atribut-atribut tersebut memiliki access modifier protected agar bisa diakses langsung di dalam child class.
  Class ini berada di tengah hierarki pewarisan. Artinya class ini memiliki parent class (Human) dan memiliki child class (Mahasiswa).
#### 3. Class Mahasiswa
  Class ini berisi NIM, Program Studi, dan Fakultas. Atribut-atribut tersebut memiliki access modifier private agar hanya bisa diakses langusng di dalam class tersebut.
  Class ini berada di bawah hierarki pewarisan. Artinya class hanya memiliki parent class (SivitasAkademik) dan tidak memiliki parent class.
*Pada class java terdapat tambahan 1 class untuk Main

Berikut merupakan alasan struktur pewarisan dalam program:
- class Human berada di paling atas karena semua SivitasAkademik dan semua Mahasiswa pasti merupakan Human.
- class SivitasAkademik berada di tengah karena tidak semua Human merupakan SivitasAkademik sedangkan semua Mahasiswa pasti merupakan SivitasAkademik.
- class Mahasiswa berada di paling bawah karena tidak semua Human dan tidak semua SivitasAkademik merupakan Mahasiswa.
