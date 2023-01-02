<?php

abstract class Buku {
    protected $nama;
    protected $jenis;
    protected $penerbit;

    public function __construct($nama, $jenis, $penerbit)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->penerbit = $penerbit;
    }

    abstract public function tema();
}
interface Jenis{
    public function jenis_buku();
    public function penerbit();
}
class Novel extends Buku implements Jenis {

    public function __construct($nama, $jenis, $penerbit, $hal)
    {
        parent::__construct($nama, $jenis, $penerbit);
    }
    public function tema()
    {
        return "Petualangan";
    }
    public function jenis_buku()
    {
        return "Novel";   
    }
    public function penerbit ()
    {
        return "Mizan";
    }
}
?>