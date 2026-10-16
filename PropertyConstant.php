<?php

class produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //connstant
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this -> harga + ($this -> harga * self :: PAJAK);
    }

}

//object
$produk = new produk();

//input ke property
$produk -> kode = 'P0001';
$produk -> nama = "laptop";
$produk -> harga = '10000000';
$produk -> stok = '5';

//hitung harga
//$pajak = produk :: PAJAK * 100;
//$jumlahpajak = $produk -> harga * produk::PAJAK;

//total
//$total = $produk -> harga * $jumlahpajak;

//output
echo "produk: ".$produk -> nama;
echo "<br/>";

echo "harga: ".$produk -> harga;
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.".$produk -> total();