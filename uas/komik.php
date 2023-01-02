<?php
include "server.php";

class Komik extends Buku implements JenisBuku {
    private $hal;
    public function __construct($nama, $jenisbuku, $penerbit, $hal)
    {
        parent::__construct($nama, $jenisbuku, $penerbit);
        $this->hal = $hal;
    }
    public function tema()
    {
        return "Komedi";
    }
    public function jenis_buku()
    {
        return "Komik";   
    }
    public function jumlah_halaman(){
        return $this->hal;
    }
}
?>