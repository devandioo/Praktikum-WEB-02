<?php
require_once 'class_pasien.php';
require_once 'class_bmi.php';


Class BmiPasien{
    public $bmi;
    public $tanggal;
    public $pasien;
    
    public function __construct($bmi, $tanggal)
    {
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
       
    }


}


?>