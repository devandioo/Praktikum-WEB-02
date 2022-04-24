<?php
require_once 'cobaBank.php';

class AccountBank extends Account{
    public $customer;

    function __construct($nomor, $saldo, $customer){
        parent:: __construct($nomor, $saldo);
        $this->customer = $customer;
    }
    public function transfer($ab_tujuan, $uang){
        $ab_tujuan->deposit($uang);//Kenp deposit? karna akun bank tujuan akan bertambah uangnya
        $this->withdraw($uang);//kenbapa witdraw karenaakun yang ini akan mengeluarkan uang atau berkurang
    }
    public function cetak()
    {
        parent::cetak();
        echo '<br>Customer: '.$this->customer;
    }

}
?>