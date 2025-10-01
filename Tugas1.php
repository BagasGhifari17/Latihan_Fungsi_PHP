<?php
// Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function bilanganTerbesar($a, $b) {
	return ($a > $b) ? $a : $b;
}

// Contoh penggunaan
$bil1 = 100;
$bil2 = 150;
$terbesar = bilanganTerbesar($bil1, $bil2);
echo "Bilangan terbesarnya adalah $terbesar";
?>
