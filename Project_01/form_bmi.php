<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include_once 'sidebar.php'; ?>
<?php include_once 'header.php' ?>

<div class="content-wrapper">
<form class="" method="POST" action="hasilFormBmi.php">
  <h3 style="text-align: center;">Body Mass Index (BMI)</h3> <br>
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div> 
 
  <div class="form-group row">
    <label for="berat_badan" class="col-4 col-form-label" >Berat Badan (Kg)</label> 
    <div class="col-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-android"></i>
          </div>
        </div> 
        <input id="berat" name="berat" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan (Cm)</label> 
    <div class="col-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-male"></i>
          </div>
        </div> 
        <input id="tinggi" name="tinggi" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="pria"> 
        <label for="gender_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="wanita"> 
        <label for="gender_1" class="custom-control-label">wanita</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="tinggi_badan" class="col-4 col-form-label">Tanggal Isi </label> 
    <div class="col-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-male"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="text" class="form-control">
      </div>
    </div>
  </div>


  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kalkulasi</button>
    </div>
    
  </div>
</form>
</div>
</body>
</html>