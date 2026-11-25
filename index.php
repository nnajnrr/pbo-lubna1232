<?php

// Memanggil namespace
use Praktikum\Produk;

// Menghubungkan file Produk.php
require_once 'produk.php';

// Membuat object
$produk = new Produk();

// Mengubah nilai property
$produk->setKode('P0001')
    ->setNama('Laptop')
    ->setHarga(10000000)
    ->setStok(5);

// Output
echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: Rp.". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak(). "%";
echo "<br/>";
echo "<br/>";

echo "Total Harga Setelah Pajak: Rp". $produk->total(); 

?>