<?php 
// PHP Date
// Fungsi date() memformat tanggal dan waktu lokal, dan mengembalikan string tanggal yang diformat

// menampilkan tanggal sekarang dengan nomber 
echo "Tanggal ".date('d') . "<br>";

// menampilkan hari sekarang
echo "Hari ".date('l') . "<br>";

// menampilkan bulan sekarang
echo "Bulan ".date('F') . "<br>";

// menampilkan tahun sekarang
echo "Tahun ".date('Y') . "<br>";

// menampilkan hari, tanggal, bulan, tahun sekarang
echo date('l, d F Y') . "<br>";

// menampilkan pukul jam, menit, detik sekarang
echo "Pukul ".date("h:i:s A") . "<br>";

?>