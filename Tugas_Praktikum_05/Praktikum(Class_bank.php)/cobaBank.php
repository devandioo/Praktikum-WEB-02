<?php
class Account{
    public $nomor;
    protected $saldo;

    function __construct($nomor, $saldo)
    {
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }
    public function withdraw($uang){
        $this->saldo = $this->saldo - $uang;
    }
    public function cetak(){
        echo 'NOMOR : '.$this->nomor; 
        echo '<br>SALDO : '.$this->saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }

} 


?>