<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content-wrapper">
<hr><h3 style="text-align: center;">Hasil Perhitungan BMI Anda</h3> <hr>




<?php

require_once 'cetak_pasien.php';
require_once 'class_bmi.php';
require_once 'class_pasien.php';
require_once 'class_bmipasien.php';


if($_POST) {
    $_nama = $_POST['nama'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi'];
    $_gender = $_POST['gender'];
    $_tanggal = $_POST['tanggal'];

    $pasien_bmi4 = new bmi('P004', $_nama, $_gender, $_berat, $_tinggi);
    echo '<br><h4>Hasil perhitungan Bmi Anda :</h4>'.$pasien_bmi4->HitungBmi();
    echo '<h4>Badan Anda Berstatus : </h4>'.$pasien_bmi4->StatusBmi();

    $bmipasien4 = new BmiPasien($pasien_bmi4, $_tanggal);
    array_push($ar_pasien, $bmipasien4);
}
?>

<br><br><br><br>
<h4 style="text-align: center;">Include Pasien Belakangan Ini : </h4>
<div class="table-responsive" class="col-10 col-form-label">
 <table class="table table-hover table-bordered">
<thead class="text-center">
 <tr>
 <th>No</th><th>Tanggal Periksa</th><th>Kode Pasien</th><th>Nama Pasien</th><th>Gender</th><th>Berat (kg)</th>
 <th>Tinggi (cm)</th><th>Nilai BMI</th><th>Status BMI</th>
</tr> <br> <br>
 </thead>
   <tbody>
      <?php
         require_once 'cetak_pasien.php';
          $nomor = 1;
        foreach($ar_pasien as $isi):
         ?>
    <tr>
        <td class="text-center"><?= $nomor++; ?></td>
        <td><?= $isi->tanggal ?></td>
        <td><?= $isi->bmi->kode ?></td>
        <td><?= $isi->bmi->nama ?></td>
        <td class="text-center"><?= $isi->bmi->gender ?></td>
        <td class="text-center"><?= $isi->bmi->berat ?></td>
        <td class="text-center"><?= $isi->bmi->tinggi ?></td>
        <td class="text-center"><?= number_format($isi->bmi->HitungBmi(),1) ?></td>
        <td><?= $isi->bmi->StatusBmi() ?></td>
        </tr>
       <?php endforeach; ?>
      </tbody>
    </table>
</div>

