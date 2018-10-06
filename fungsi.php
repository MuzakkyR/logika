<?php
    function fibonacci($jumlah){
        $a = 0;
        $b = 1;
        echo $a, " ", $b, " ";
        for($i=0; $i<$jumlah; $i++){
            $c = $a + $b;
            echo $c, " ";
            $a = $b;
            $b = $c;
        }
    }

    function revpalindrom($kalimat){
        $reverse = strrev($kalimat);

        echo $reverse, "<br>";

        if($kalimat == $reverse){
            echo "Palindrome";
        } else{
            echo "Tidak Palindrome";
        }
    }

    function binergap($angka){
        $binernya = decbin($angka);
        $trimmed = trim($binernya, "0");
        $meledak = explode("1", $trimmed);
        $itung = array_map('strlen', $meledak);
        echo max($itung);
    }
?>