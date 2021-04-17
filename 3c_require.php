<?php 
// PHP Require
// fungsi require akan menghasilkan kesalahan fatal (E_COMPILE_ERROR) dan menghentikan skrip, ketika ada kesalahan dalam fungsi atau statemen
// pada fungsi
require('databases/img2.png');

// pada statement
require 'databases/img2.png';
// Ketika file tidak ditemukan, maka akan muncul pesan Fatal error, dan script berhenti

// fungsi dan statment selanjutnya pasti tidak akan di eksekusi
echo "<br>Hello World!";

?>