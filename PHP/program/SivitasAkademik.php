<?php

include "Human.php";

class SivitasAkademik extends Human
{
    protected $asalUniv = "";
    protected $emailEdu = "";

    public function __construct($nik = "", $nama = "", $jenkel = "", $asalUniv = "", $emailEdu = "")
    {
        parent::__construct($nik, $nama, $jenkel);
        $this->asalUniv = $asalUniv;
        $this->emailEdu = $emailEdu;
    }

    public function getAsalUniv()
    {
        return $this->asalUniv;
    }

    public function setAsalUniv($asalUniv)
    {
        $this->asalUniv = $asalUniv;
    }

    public function getEmailEdu()
    {
        return $this->emailEdu;
    }

    public function setEmailEdu($emailEdu)
    {
        $this->emailEdu = $emailEdu;
    }
}

?>