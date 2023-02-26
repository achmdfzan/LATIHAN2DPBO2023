<?php

class Human
{
    protected $nik = "";
    protected $nama = "";
    protected $jenkel = "";

    public function __construct($nik = "", $nama = "", $jenkel = "")
    {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->jenkel = $jenkel;
    }

    public function getNIK()
    {
        return $this->nik;
    }

    public function setNIK($nik)
    {
        $this->nik = $nik;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getJenkel()
    {
        return $this->jenkel;
    }

    public function setJenkel($jenkel)
    {
        $this->jenkel = $jenkel;
    }
}

?>