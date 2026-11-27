<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\produk;

class Jasa
{
    use produk;

    public function payment($tipe)
    {

        return match ($tipe) {
            "virtual" => 'Virtual account',
            "qris" => 'QRIS',
            default => 'hanya bisa pembayaran va dan qris'
        };
    }
}