<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
    ['judul' => 'Laut Bercerita', 'penulis' => ' Leila S. Chudori ', 'tahun' => 2017],    
    // TODO: tambahkan 2 buku lagi
];
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// 2) Versi OOP
class Buku
{
  private string $judul;
  private string $penulis;
  private int $tahun;
    // TODO: properti, constructor, dan method info()
  public function __construct(string $judul, string $penulis, int $tahun)
  {
    $this-> judul = $judul;
    $this-> penulis = $penulis;
    $this-> tahun = $tahun;
      
  }

public function info():string
    {
    return "{$this->judul} - {$this->penulis} ({$this->tahun})";
    }
}


$buku1 = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
$buku2 = new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 1980);
$buku3 = new Buku('Laut Bercerita', 'Leila S. Chudori', 2017);

echo "\nVersi OOP:\n";

echo $buku1->info() . "\n";
echo $buku2->info() . "\n";
echo $buku3->info() . "\n";

// TODO: buat 3 object Buku lalu tampilkan info()-nya
