<?php
// Ambil tanggal sekarang
$sekarang = getdate();

// Ambil elemen tertentu
$tanggal = $sekarang["mday"];   // Hari (tanggal)
$bulan   = $sekarang["mon"];    // Bulan (angka)
$tahun   = $sekarang["year"];   // Tahun

// Tampilkan hasil
echo "Sekarang Tanggal : " . $tanggal . "-" . $bulan . "-" . $tahun;
?>
