<?php 
// PHP Include
// fungsi include akan menghasilkan kesalahan fatal (E_WARNING) dan skrip akan dilanjutkan, ketika ada kesalahan dalam fungsi atau statement
// pada fungsi
include('databases/img2.png');

// pada statement tanda @ akan menghilangkan pesan kesalahan
@include 'databases/img2.png';
// Ketika file tidak ditemukan, maka akan muncul pesan Fatal error, dan script berhenti

// fungsi atau statment selanjutnya akan dieksekusi meskupun terjadi kesalahan
echo "<br>Hello World!";

?>