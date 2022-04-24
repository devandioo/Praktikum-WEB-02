<?php
require_once 'class_pasien.php';
require_once 'class_bmi.php';
require_once 'class_bmipasien.php';



$pasien_bmi1 = new bmi('P001', 'Ahmad', 'Laki', 69.8, 169);
$pasien_bmi1->HitungBmi();
$pasien_bmi1->StatusBmi();


$pasien_bmi2 = new bmi('P001', 'Rina', 'Perempuan',55.3, 165);
$pasien_bmi2->HitungBmi();
$pasien_bmi2->StatusBmi();


$pasien_bmi3 = new bmi('P003', 'Luthfi', 'Laki',45.2, 171);
$pasien_bmi3->HitungBmi();
$pasien_bmi3->StatusBmi();

//public function __construct($bmi, $tanggal, $pasien)
$bmipasien1 = new BmiPasien($pasien_bmi1,'2022-01-10');
$bmipasien2 = new BmiPasien($pasien_bmi2,'2022-01-10');
$bmipasien3 = new BmiPasien($pasien_bmi3,'2022-01-11');

$ar_pasien = [$bmipasien1, $bmipasien2, $bmipasien3];


?>