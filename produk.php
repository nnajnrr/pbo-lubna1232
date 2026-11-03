<?php

namespace Praktikum;

class Produk
{
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method untuk menghitung total harga setelah pajak
    public function total()
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    // Static method untuk menghitung persentase pajak
    public static function pajak()
    {
        return self::PAJAK * 100;
    }
}

?>