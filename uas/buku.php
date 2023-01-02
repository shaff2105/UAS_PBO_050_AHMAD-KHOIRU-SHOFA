<?php
include "server.php";

abstract class Buku {
    protected $nama;
    protected $jenisbuku;
    protected $penerbit;

    public function __construct($nama, $jenisbuku, $penerbit)
    {
        $this->nama = $nama;
        $this->jenisbuku = $jenisbuku;
        $this->penerbit = $penerbit;
    }

    abstract public function tema();
}
?>