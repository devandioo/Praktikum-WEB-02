<?php include_once 'header.php'; include_once 'sidebar.php';  ?>   


<?php
class dispenser{
    public $namaMinuman;
    public $jumlah;
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;

// Setter Getter Private.
    public function setvolumeGelas($VG){
		$this->volumeGelas = $VG;
	}
    public function getvolumeGelas() {
		return $this->volumeGelas; 
	}


// construct class dispenser
    public function __construct($namaMinuman, $jumlah){
        
        $this->namaMinuman = $namaMinuman;
        $this->jumlah = $jumlah;
    }
    

   //Harga dan Varian minuman
    public function bayar(){
        if($this->namaMinuman == 'teh'){
            return $this->jumlah * 3500;
        } elseif($this->namaMinuman == 'kopi'){
            return $this->jumlah * 4000;
        } elseif($this->namaMinuman == 'susu'){
            return $this->jumlah * 3000;
        }

    }
    //volume gelas 250, volume galon 19 liter/1900ml maka :
    public function sisaair(){
        return 19000 - ( 250 * $this->jumlah);
    }
}

//Daftar Menu Minuman : 
 echo "<h3 style='text-align:center;'>  Daftar Harga Minuman :</h3>";
 echo ' <br/>Teh : 3.500';
 echo '<br/>Kopi : 4.000';
 echo '<br/>Susu : 3000 <hr>';

//Membuat Object
 $devan = new dispenser('susu', 3);
 $ripan = new dispenser('kopi', 2);
 $ahmad = new dispenser('teh', 4);

 // CETAK
 echo "<h4 style='text-align:center;'>  SUSU </h4>";
 echo '<br><br>Customer Devan memesan Susu 3 gelas maka : ';
 echo '<br>Cust. devan harus membayar Rp.'.$devan->bayar() .'<br><br>';
 echo 'Sisa Stock susu awal masih 1galon/1900 ml lalu dikurangi pembelian 3 gelas @250ml : <br>';
 echo 'Maka Sisa akhir stoc susu masih : '.$devan->sisaair() .' ml'; 

 echo '<br><hr>';
 
 echo "<h4 style='text-align:center;'>  KOPI </h4>";
 echo '<br><br>Customer ripan memesan Kopi 2 gelas maka : ';
 echo '<br>Cust. ripan harus membayar Rp.'.$ripan->bayar() .'<br><br>';
 echo 'Sisa Stock Kopi awal masih 1galon/1900 ml lalu dikurangi pembelian 2 gelas @250ml : <br>';
 echo 'Maka Sisa akhir stoc susu masih : '.$ripan->sisaair() .' ml'; 

 echo '<br><hr>';

 echo "<h4 style='text-align:center;'>  TEH </h4>";
 echo '<br><br>Customer ripan memesan teh 4 gelas maka : ';
 echo '<br>Cust. ripan harus membayar Rp.'.$ahmad->bayar() .'<br><br>';
 echo 'Sisa Stock Teh awal masih 1galon/1900 ml lalu dikurangi pembelian 4 gelas @250ml : <br>';
 echo 'Maka Sisa akhir stoc susu masih : '.$ahmad->sisaair() .' ml'; 


?>
<?php  include_once 'footer.php' ?>