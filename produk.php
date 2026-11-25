<?php

namespace Praktikum;

class Produk
{
    // Property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor
    public function __construct(){
    }

    // setter
    public function setKode ($kode) {
        $this->kode = $kode;
        return $this;
    }
    public function setNama ($nama) {
        $this->nama = $nama;
        return $this;
    }
    public function setHarga ($harga) {
    if($harga <= 0){
        exit();
    }    
    $this->harga = $harga;
        return $this;
    }
    public function setStok ($stok) {
    if($stok <= 0){
        exit();
    }    
        $this->stok = $stok;
        return $this;
    }

    // getter
    public function getKode() {
        return $this->kode;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getHarga() {
        return $this->harga;
    }
    public function getStok() {
        return $this->stok;
    }

    // Static method untuk menghitung persentase pajak
    public static function pajak()
    {
        return self::PAJAK * 100;
    }
    // Method untuk menghitung total harga setelah pajak
    public function total() 
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}

?>