
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include_once 'header.php'; include_once 'sidebar.php';  ?>   


</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">WEB 02</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Review PHP</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Review PHP</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
            <li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">PHP6 OOP</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" /> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					
				</div>
			</nav>
		</div>
	</div>
</div>
<fieldset>    
  <h2 >Form Nilai ujian</h2> <hr><br> <br>
<form action="form.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nomor Induk Siswa : </label> 
    <div class="col-6">
      <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah : </label> 
    <div class="col-6">
      <select id="matkul" name="matkul" class="custom-select" placeholder="Pilih Matkul">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
        <option value="UIUX">UI/UX</option>
        <option value="INGGRIS">Bahasa Inggris</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai Mata Kuliah</label> 
    <div class="col-6">
      <input id="nilai" name="nilai" placeholder=" Input Nilai " type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-6">
        <input type="submit" value="SIMPAN" name="proses"> <br> <br>
    </div>
  </div>
</form>

<?php
require_once 'class_mahasiswa.php';
if($_POST){
$ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
$grading = $ns->hitungnilai();
$hasil = $ns->grade($grading);
$hasil2 = $ns->Hasil($grading);
//CETAK
echo 'NIM : '.$ns->nim;
echo '<br/>Matkul : '.$ns->matkul;
echo '<br/>nilai : '.$ns->nilai;
echo '<br/>Sandang : '.$hasil;
echo '<br/>Grade : ' .$hasil2;
}
?>
</fieldset>
</body>
</html>
<?php  include_once 'footer.php' ?>