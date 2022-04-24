


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Praktikum_02</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php include_once 'header.php'; 
    include_once 'sidebar.php';  ?>   

  </head>
  <body>
  <div class="container-fluid"> content
    
	<div class="row">
		<div class="col-md-8">
        <h2>Belanja Online</h2> <hr>
        <form action="hasil_belanja.php" method="POST">

        <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer :</label> 
    <div class="col-4">
      <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
    </div> 
  </div> 
    <p>Pilihan Produk:</p>

<div>
  <input type="radio" id="tv" name="produk" value="tv">
  <label for="tv">TV</label>
  <input type="radio" id="kulkas" name="produk" value="kulkas">
  <label for="kulkas">Kulkas</label>
  <input type="radio" id="mesin_cuci" name="produk" value="mesin_cuci">
  <label for="mesin_cuci">Mesin Cuci</label>
</div>

<div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah :</label> 
    <div class="col-4">
      <input id="jumlah" name="jumlah" placeholder="Jumlah Pesanan" type="number" class="form-control" required> 
    </div> 
    
    <div class="form-group row"> <br>
        <input type="submit" value="SIMPAN" name="proses" id="submit"> <br> <br>
    </div>

</div>
        </form>
        </div>

	
    
		<div class="col-md-4">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV : RP 4.200.000
				</div>
				<div class="list-group-item">
            
					Kulkas : RP 3.100.000
				</div>
					
				</div>
				<div class="list-group-item justify-content-between">
					Mesin Cuci : Rp 3.800.000 <span class="badge badge-secondary badge-pill"></span>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah  <span class="badge badge-light badge-pill">&#128564;</span></a>
			</div>
      <hr>
		</div>
    <?php
//Proses ambil data
$proses = $_POST['proses'];
$nama_costumer = $_POST['nama'];
$produk_dipilih = $_POST['produk'];
$jumlah_beli = $_POST['jumlah'];

// IF ELSE
if ($produk_dipilih == "tv") {
    $total_belanja = $jumlah_beli * 4200000;
} elseif ($produk_dipilih == "kulkas") {
    $total_belanja = $jumlah_beli * 3100000;
} elseif ($produk_dipilih == "mesin_cuci") {
    $total_belanja = $jumlah_beli * 3800000;
} else {
    $total_belanja = 0;
}
// PRINT
if (!empty($proses)) {
 echo '<h4 style="text-align:center;">Pembelian Produk Xyz</h4>';
 echo '<br/>Nama Customer : ' .$nama_customer;
 echo '<br/> Pilihan Produk : ' .$produk_dipilih;
 echo '<br/> Kuantitas : ' .$jumlah_beli;
 echo '<br/> Total Harga : Rp' .$total_belanja;
}

?>
	</div>
</div>


</body>
</html>
<?php  include_once 'footer.php' ?>
