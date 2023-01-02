<?php
include "server.php";

class Ensiklopedia extends Buku implements JenisBuku {
    private $hal;
    public function __construct($nama, $jenisbuku, $penerbit, $hal)
    {
        parent::__construct($nama, $jenisbuku, $penerbit);
        $this->hal = $hal;
    }
    public function tema()
    {
        return "Sejarah";
    }
    public function jenis_buku()
    {
        return "Ensiklopedia";   
    }
    public function jumlah_halaman(){
        return $this->hal;
    }
}
?>