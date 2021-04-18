<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations</title>
</head>
<body>

    <?php

    // arithmetic operators
    echo "<h3>arithmetic operators:</h3>";
    $x=10;
    $y=4;
    echo "x=$x, y=$y<br>";

    //Penjumlahan
    $n=$x+$y;
    echo "x+y=$n<br>";

    // Pengurangan
    $n=$x-$y;
    echo "x-y=$n<br>";

    //Perkalian
    $n=$x/$y;
    echo "x/y=$n<br>";

    // Perkalian
    $n=$x*$y;
    echo "x*y=$n<br>";

    // Hasil bagi
    $n=$x%$y;
    echo "x%y=$n<br>";

    // Increment
    echo ($x++) . "++=$x<br>";

    // Decrement
    echo ($x--) . "--=$x";



    // comparison operators
    echo "<h3>comparison operators:</h3>";
    echo "$x == $y<br>". var_dump($x == $y);
    echo "$x != $y<br>". var_dump($x != $y);
    echo "$x <> $y<br>". var_dump($x <> $y);
    echo "$x > $y<br>". var_dump($x > $y);
    echo "$x < $y<br>". var_dump($x < $y);
    echo "$x >= $y<br>". var_dump($x >= $y);
    echo "$x <= $y<br>". var_dump($x <= $y);
    // Implementation
    $password='12345';
    if ($password == '12345') {
        echo "Login sukses!";
    } else {
        echo "Login gagal!";
    }


    // assignment operators
    echo "<h3>assignment operators:</h3>";
    /* nilai variabel x akan berubah ubah karna x hanya di deklarasikan satu kali
    tergantung dari oprator dibawahnya yang mengeksekusi nilai x*/
    // =
    $x = 10;  
    echo "x = ".$x."<br>";

    // +=
    $x += 10;  
    echo "x += ".$x."<br>";

    // -=
    $x -= 10;  
    echo "x -= ".$x."<br>";

    // *=
    $x *= 10;  
    echo "x *= ".$x."<br>";

    // /=
    $x /= 10;  
    echo "x /= ".$x."<br>";

    // .=
    $x .= 10;  
    echo "x .= ".$x."<br>";

    // %=
    $x %= 10;  
    echo "x %= ".$x."<br>";


    // logical operators
    echo "<h3>Logical operators:</h3>";
    // and jika semua sarat terpenuhi
    $username='admin';
    $password='12345';
    if ($username == 'admin' && $password == '12345') {
        echo "Login sukses!<br>";
    } else {
        echo "Login gagal!<br>";
    }

    // or jika ada salah satu yang memenuhi sarat
    $username='admin';
    $password='12345678';
    if ($username == 'admin' || $password == '12345') {
        echo "Login sukses!<br>";
    } else {
        echo "Login gagal!<br>";
    }

    // not jika inputan tidak sama dengan syarat
    $username='user';
    $password='12345678';
    if ($username != 'admin') {
        echo "Login as User<br>";
    } else {
        echo "Login as Admin<br>";
    }

    // xor jika ada salah satu yang memenuhi sarat, namun tidak keduanya
    $username='admin';
    $password='12345';
    if ($username == 'admin' xor $password == '12345') {
        echo "Login sukses!<br>";
    } else {
        echo "Login gagal!<br>";
    }

    ?>
    
</body>
</html>