<?php

include "SivitasAkademik.php";

class Mahasiswa extends SivitasAkademik
{
    private $nim = "";
    private $prodi = "";
    private $fakultas = "";

    public function __construct($nik = "", $nama = "", $jenkel = "", $asalUniv = "", $emailEdu = "", $nim = "", $prodi = "", $fakultas = "")
    {
        parent::__construct($nik, $nama, $jenkel, $asalUniv, $emailEdu);
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }

    public function getNIM()
    {
        return $this->nim;
    }

    public function setNIM($nim)
    {
        $this->nim = $nim;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getFakultas()
    {
        return $this->fakultas;
    }

    public function setFakultas()
    {
        $this->fakultas = $fakultas;
    }
}

?>