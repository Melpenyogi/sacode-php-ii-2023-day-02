<?php
    
    /*
    membuat varible nilai
    dengantype data boolean
    */
    $nilaiA = true;
    $nilaiB = false;
    $nilaiC = false;

    // menampilkannilai variable

    echo "Nilai A : " . $nilaiA . "<br>";
    echo "Nilai B : " . $nilaiB . "<br>";
    echo "Nilai C : " . $nilaiC . "<br>";

    // Membuat garis horisontal dengan tag HTML <hr>
    echo "<hr";

    // menampilkan rype dan nilai variable
    echo var_dump($nilaiA) . "<br>";
    echo var_dump($nilaiB) . "<br>";
    echo var_dump($nilaiC) . "<br>";

?>