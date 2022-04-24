<?php
require_once 'class_pasien.php';

class bmi extends Pasien{
  public $berat;
  public $tinggi;

  public function __construct($kode, $nama, $gender, $berat, $tinggi)
  {
    parent:: __construct($kode, $nama, $gender);
    //$this->kode = $kode;
    //$this->nama = $nama;
    //$this->gender = $gender;
    $this->berat = $berat;
    $this->tinggi = $tinggi;
  }

  public function HitungBmi(){
    //cara menghitung kuadrat 
    //echo pow(2,3) jadinya adalah 2x2x2

    return  $this->berat / (pow(($this->tinggi / 100), 2));
    //$HitungBmi = $this->berat / (($this->tinggi / 100)*($this->tinggi / 100));

    //di bagi 100 /100 karena dari satuan cm menjadi meter
  }
  public function StatusBmi(){
    $HitungBmi = $this->HitungBmi();
    if($HitungBmi <= 18.5) return 'Kekurangan berat badan';
    elseif($HitungBmi >= 18.6 && $HitungBmi <= 24.9)return 'Berat Badan ideal';
    elseif($HitungBmi >= 25 && $HitungBmi <= 29.9)return 'Kelebihan berat Badan';
    elseif($HitungBmi >= 30 )return 'Berat Badan Kegemukan (Obesitas)';
    else 'Imput Berat anda';
  }
}


?>