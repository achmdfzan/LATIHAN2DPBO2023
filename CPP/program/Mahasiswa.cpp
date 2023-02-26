#include "SivitasAkademik.cpp"

class Mahasiswa : public SivitasAkademik
{
    private:

        string nim;
        string prodi;
        string fakultas;

    public:

        Mahasiswa(){}

        Mahasiswa(string nik, string nama, string jenkel, string asalUniv, string emailEdu, string nim, string prodi, string fakultas)
        {
            this->nik = nik;
            this->nama = nama;
            this->jenkel = jenkel;

            this->asalUniv = asalUniv;
            this->emailEdu = emailEdu;

            this->nim = nim;
            this->prodi = prodi;
            this->fakultas = fakultas;
        }

        ~Mahasiswa(){}

        string getNIM()
        {
            return nim;
        }

        void setNIM(string nim)
        {
            this->nim = nim;
        }

        string getProdi()
        {
            return prodi;
        }

        void setProdi(string prodi)
        {
            this->prodi = prodi;
        }

        string getFakultas()
        {
            return fakultas;
        }

        void setFakultas(string fakultas)
        {
            this->fakultas = fakultas;
        }
};