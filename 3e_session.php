<?php 
// PHP session
/* 
session ialah cara untuk menyimpan informasi ke dalam variabel untuk digunakan di beberapa halaman
fungsinya untuk berbagi informasi ke semua halaman yang berbeda dalam satu situs atau aplikasi
*/

// memulai sesi dari fungsi
session_start();

// menampilkan id dari sesi ini
echo session_id()."<br>";

// menginisialisasi variabel session
$_SESSION['logId'] = '19552011182';
$_SESSION['logName'] = 'nuryadin abutani';
$_SESSION['logTime'] = date('d-m-Y');

// menampilkan detail array dari sesi log ini
print_r($_SESSION);

// membaca data session
echo $_SESSION['logName'];

// menghapus data session berdasarkan index
unset($_SESSION['logName']);

// menampilkan detail array dari sesi log ini
print_r($_SESSION);

// menghapus file session dari server
session_destroy();

?>


