<?php

require('./PropertyConstant.php');

use pbo\marketplace\jasa;
use pbo\marketplace\produk;

//object
$produk = new Jasa();

$produk -> setkode ('P0001') 
        -> setnama ('laptop')
        -> setharga (10000000)
        -> setstok (5); 

//output
echo "produk: ".$produk -> getNama();
echo "<br/>";

echo "harga: ".$produk -> getHarga();
echo "<br/>";

echo "stok: ".$produk -> getStok();
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.".$produk -> total();