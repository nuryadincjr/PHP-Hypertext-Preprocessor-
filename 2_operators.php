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
    $n=10;
    $y=4;
    echo "n=$n, y=$y<br>";

    //Penjumlahan
    $x=$n+$y;
    echo "n+y=$x<br>";

    // Pengurangan
    $x=$n-$y;
    echo "n-y=$x<br>";

    //Perkalian
    $x=$n/$y;
    echo "n/y=$x<br>";

    // Perkalian
    $x=$n*$y;
    echo "n*y=$x<br>";

    // Hasil bagi
    $x=$n%$y;
    echo "n%y=$x<br>";

    // Increment
    $x=$n;
    $x++;
    echo "x=$n, x++ =$x<br>";

    // Decrement
    $x=$n;
    $x--;
    echo "x=$n, x-- =$x<br>";

    // comparison operators
    // assignment operators


    
    // logical operators
    // And &&
    $banding = 3;
    if ($n && $y < $banding)
        echo "$n dan $y < $banding<br>";
    else
        echo "$n dan $y > $banding<br>";

    // Or ||
    $banding = 5;
    if ($n || $y < $banding)
        echo "$n atau $y < $banding<br>";
    else
        echo "$n dan $y > $banding<br>";
    // Not !
    $banding = 5;
    if ($n != $y < $banding)
        echo "$n tidak sama dengan $y <br>";
    else
        echo "$n tidak sama dengan $y <br>";

    ?>
    
</body>
</html>