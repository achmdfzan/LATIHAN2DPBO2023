#include <bits/stdc++.h>

using namespace std;

class Human
{
    protected:

        string nik;
        string nama;
        string jenkel;

    public:

        Human(){}

        ~Human(){}

        string getNIK()
        {
            return nik;
        }

        void setNIK(string nik)
        {
            this->nik = nik;
        }

        string getNama()
        {
            return nama;
        }

        void setNama(string nama)
        {
            this->nama = nama;
        }

        string getJenkel()
        {
            return jenkel;
        }

        void setJenkel(string jenkel)
        {
            this->jenkel = jenkel;
        }
};