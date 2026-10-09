<?php

class Produk
{
    // property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // constant
    const PAJAK = 0.11;
}

// bikin object
$produk = new Produk();

$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

// ngitunhg pajak dan total harga
$pajak = $produk->harga * Produk::PAJAK;
$totalHarga = $produk->harga + $pajak;

// output
echo "Produk: " . $produk->nama . PHP_EOL;
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.') . PHP_EOL;
echo "Stok: " . $produk->stok . PHP_EOL;
echo "Pajak: " . (Produk::PAJAK * 100) . "%" . PHP_EOL;
echo PHP_EOL;
echo "Total harga setelah pajak: Rp" . number_format($totalHarga, 0, ',', '.') . PHP_EOL;

?>