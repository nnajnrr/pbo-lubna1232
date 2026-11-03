<?php

// Memanggil namespace
use Praktikum\Produk;

// Menghubungkan file Produk.php
require_once 'Produk.php';

// Membuat object
$produk = new Produk("P0001", "Laptop", 10000000, 5);

// Mengubah nilai property
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

// Output
echo "Produk: " . $produk->nama;
echo "<br>";

echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.');
echo "<br>";

echo "Stok: " . $produk->stok;
echo "<br>";

echo "Pajak: " . Produk::pajak() . "%";
echo "<br>";

echo "Total Harga: Rp" . number_format($produk->total(), 0, ',', '.');

?>