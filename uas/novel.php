<?php
include "server.php";

class Novel extends Buku implements JenisBuku {
    private $hal;
    public function __construct($nama, $jenisbuku, $penerbit, $hal)
    {
        parent::__construct($nama, $jenisbuku, $penerbit);
        $this->hal = $hal;
    }
    public function tema()
    {
        return "Petualangan";
    }
    public function jenis_buku()
    {
        return "Novel";   
    }
    public function jumlah_halaman(){
        return $this->hal;
    }
}
?>