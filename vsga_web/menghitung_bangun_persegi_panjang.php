<?php
    
    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    function hitungKeliling($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    function hitungDiagonal($panjang, $lebar) {
        return sqrt(pow($panjang, 2) + pow($lebar, 2));
    }

    $panjang = 5; 
    $lebar = 3; 

    $luas = hitungLuas($panjang, $lebar);
    $keliling = hitungKeliling($panjang, $lebar);
    $diagonal = hitungDiagonal($panjang, $lebar);

    echo "<h2>Menghitung Bangun Persegi Panjang</h2>";
    echo "Panjang: " . $panjang . " meter" . "<br>";
    echo "Lebar: " . $lebar . " meter" . "<br>";
    echo "Luas: " . $luas . " meter persegi" . "<br>";
    echo "Keliling: " . $keliling . " meter" . "<br>";
    echo "Diagonal: " . $diagonal . " meter" . "<br>";
?>