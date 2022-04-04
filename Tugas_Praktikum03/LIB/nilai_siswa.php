<?php
$proses = $_POST ["proses"];
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

//Cetak
if(!empty($proses)){
echo '<h3 style="text-align:center;">Hasil Nilai Mahasiswa</h3>';
echo '<br> Nama : ' .$nama;
echo '<br> Matkul : ' .$matkul;
echo '<br> Nilai UTS : ' .$nilai_uts;
echo '<br> Nilai UAS : ' .$nilai_uas;
echo '<br> Nilai Tugas : ' .$nilai_tugas;
}

//Membuat Nilai Rata-rata
$syrt_uts = 30 / 100;
$syrt_uas = 35 / 100;
$syrt_tugas = 35 / 100;
//RERATA
$rata2 = $nilai_uts * $syrt_uts + $nilai_uas * $syrt_uas + $nilai_tugas * $syrt_tugas;
echo '<br/> Rerata ' .$matkul. ' Nilai anda Adalah :'.$rata2;

//IF MULTI KONDISI
if ($nilai_uas >= 85 && $nilai <= 100) {
    echo '<br/> Grade : A';
}
elseif ($nilai_uas >= 70 && $nilai <85) {
    echo '<br/>Grade : B';
}
elseif ($nilai_uas >= 56 && $nilai <70) {
    echo '<br/>Grade : C';
}
elseif ($nilai_uas >= 36 && $nilai <56) {
    echo '<br/>Grade : D';
}
elseif ($nilai_uas >= 0 && $nilai <35) {
    echo '<br/>Grade : E';
}
else {
    echo '<br/>Grade : I ';
} 

//Swicth Predikat Siswa
switch ($rata2) {
    case $rata2 >= 85 && $rata2 <= 100:
        echo '<br/> Predikat : Sangat Memuaskan !';
        break;
    case $rata2 >= 70 && $rata2 < 85:
        echo '<br/>Predikat : Memuaskan !';
        break;
    case $rata2 >= 56 && $rata2 < 70:
        echo '<br/>Predikat : Cukup';
        break;
    case $rata2 >= 36 && $rata2 < 56:
        echo '<br/>Predikat : Kurang';
        break;
    case $rata2 >= 1 && $rata2 <36:
        echo '<br/>Predikat : Sangat Kurang !';
        break;
    case $rata2 = 0:
         echo '<br/>Predikat : Kosong !';
        break;
    default:    
        ' <br/>Predikat : Tidak Ada';
        break;
}
?>