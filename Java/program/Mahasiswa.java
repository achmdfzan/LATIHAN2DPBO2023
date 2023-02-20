public class Mahasiswa extends SivitasAkademik
{
    private String nim;
    private String prodi;
    private String fakultas;

    Mahasiswa(){}

    Mahasiswa(String nik, String nama, String jenkel, String asalUniv, String emailEdu, String nim, String prodi, String fakultas)
    {
        this.nik = nik;
        this.nama = nama;
        this.jenkel = jenkel;
        this.asalUniv = asalUniv;
        this.emailEdu = emailEdu;
        this.nim = nim;
        this.prodi = prodi;
        this.fakultas = fakultas;
    }
    
    public String getNIM()
    {
        return this.nim;
    }

    public void setNIM(String nim)
    {
        this.nim = nim;
    }

    public String getProdi()
    {
        return this.prodi;
    }

    public void setProdi(String prodi)
    {
        this.prodi = prodi;
    }

    public String getFakultas()
    {
        return this.fakultas;
    }

    public void setFakultas(String fakultas)
    {
        this.fakultas = fakultas;
    }
}