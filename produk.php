
<?php

class Produk
{
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
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

// Membuat object
$produk = new Produk("P0001", "Laptop", 10000000, 5);

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
