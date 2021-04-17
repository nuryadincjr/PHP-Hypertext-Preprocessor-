<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<body>

    <?php

    // Fungsi print() digunakan untuk menampilkan string
    print("This is 10 Hello World! string funcition format")
    .'<br>';

    // Fungsi str_word_count() digunakan untuk menghitung jumlah kata dalam string
    $text="Hello World!";
    echo "on \"".$text."\" there are \"".str_word_count($text)."\" words"
    .'<br>';

    // Fungsi strtolower() digunakan untuk mengkonversi string ke format huruf kecil
    $text="HELLO WORLD!";
    echo "before \"".$text."\" after \"".strtolower($text)."\""
    .'<br>';

    // Fungsi strtoupper() digunakan untuk mengkonversi string ke format huruf besar
    $text="Hello World!";
    echo "before \"".$text."\" after \"".strtolower($text)."\""
    .'<br>';

    // Fungsi ucfirst() digunakan untuk mengkonversi karakter pertama pada string ke format huruf besar
    $text="hello world!";
    echo "before \"".$text."\" after \"".ucfirst($text)."\""
    .'<br>';

    // Fungsi ucwords()  digunakan untuk mengkonversi setiap awal kata dalam string dengan format huruf besar
    $text="hello world!";
    echo "before \"".$text."\" after \"".ucwords($text)."\""
    .'<br>';

    // Fungsi stripslashes() digunakan untuk menghilangkan slash atau garis miring (/) sebelum tanda kutip pada string
    $text="hello \world!";
    echo "before \"".$text."\" after \"".stripslashes($text)."\""
    .'<br>';

    // Fungsi str_replace() digunakan untuk menggantikan beberapa teks dengan beberapa teks lain dalam sebuah string.
    $text="hello \world!";
    echo "before \"".$text."\" after \"".str_replace("\world!","world!",$text)."\""
    .'<br>';

    // Fungsi strrev() digunakan untuk membalikan text string seperti cermin
    $text="Hello World!";
    echo "before \"".$text."\" after \"".strrev($text)."\""
    .'<br>';

    // Fungsi strrev() digunakan untuk mengacak susunan kata dalam teks string
    $text="Hello World!";
    echo "before \"".$text."\" after \"".str_shuffle ($text)."\""
    .'<br>';

    ?>
    
</body>
</html>