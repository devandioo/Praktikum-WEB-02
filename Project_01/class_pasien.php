<?php

class Pasien{
    public $kode;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $id;


    //construck 
    public function __construct($kode, $nama, $gender)
    {
        $this->kode=$kode ;
        $this->nama=$nama;
        $this->gender=$gender;
    }





 
}


?>