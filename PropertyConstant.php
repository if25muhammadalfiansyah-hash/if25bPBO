<?php

namespace pbo\marketplace;

trait produk {

    //property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    //connstant
    public const PAJAK = 0.11;

    public function __construct() {
       
    }

    //setter
    public function setKode($kode){
        $this->kode = $kode;
        return $this;
    }

    public function setNama($nama){
        $this->nama = $nama;
        return $this;
    }
    public function setHarga($harga){
        $this->harga = $harga;
        if ($harga <= 0) {
            echo "harga tidak boleh 0";
            exit();
        }
        return $this;
    }
    public function setStok($stok){ 
        $this->stok = $stok;
        if ($stok <= 0) {
            echo "stok tidak boleh 0";
            exit();
        }
        return $this;
    }

    //getter
    public function getKode(){
        return $this->kode;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getHarga(){
        return "Rp.". $this->harga;
    }
    public function getStok(){
        return $this->stok. "pcs";
    }

    public function pajak(){
        return self::PAJAK * 100;
    }

    public function total() {
        return $this -> harga + ($this -> harga * self :: PAJAK);
    }

}