
<?php include_once 'header.php'; include_once 'sidebar.php';  ?>   


<?php
require_once 'class_persegipanjang.php';

echo '<h3 style="text-align=center;" > Mencoba Hasil Hitung Luas dan keliling </h3>';

$persegipanjang1 = new PersegiPanjang(12, 7);
echo '<h4>Persegi panjang Pertama</h4>';
echo '<br>Panjang Sisi : '.$persegipanjang1->get_panjang();
echo '<br>Lebar Sisi : ' .$persegipanjang1->get_lebar();
echo '<br/>Luas : '.$persegipanjang1->get_luas();
echo '<br/>Keliling : '.$persegipanjang1->get_keliling();

echo '<br><br> <hr> <br>';

$persegipanjang2 = new PersegiPanjang(120, 100);
echo '<h4>Persegi panjang Kedua</h4>';
echo '<br>Panjang Sisi : '.$persegipanjang2->get_panjang();
echo '<br>Lebar Sisi : ' .$persegipanjang2->get_lebar();
echo '<br/>Luas : '.$persegipanjang2->get_luas();
echo '<br/>Keliling : '.$persegipanjang2->get_keliling();


?>
<?php  include_once 'footer.php' ?>