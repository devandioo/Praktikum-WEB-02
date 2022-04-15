<?php

Class PersegiPanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;

    }
    function get_panjang(){
        return $this->panjang;
    }
    function get_lebar(){
        return $this->lebar;
    }
    public function get_luas(){
        return   $this->panjang * $this->lebar;
    }
    public function get_keliling(){
        return  $this->panjang * 2 + $this->lebar * 2;
    }
    
  




}




?>