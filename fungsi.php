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

    function piramid($tinggi){
        for($x = 1; $x <= $tinggi; $x++){
            for($y = $tinggi; $y > $x; $y--){
                echo "_";
            }
            for($z = 0; $z < $x*2-1; $z++){
                echo "*";
            }
            for($v = $tinggi; $v > $x; $v--){
                echo "_";
            }
            echo "<br>";
        }
    }
    function revpiramid($tinggi){
        for($x = $tinggi; $x >= 1; $x--){
            for($y=$tinggi ; $y > $x; $y--){
                echo"_";
            }
            for($z = 0; $z < $x*2-1; $z++){
                echo "*";
            }
            for($v=$tinggi ; $v > $x; $v--){
                echo"_";
            }
            echo "<br>";
        }
    }
    function l_piramid($tinggi){
        for($x = $tinggi; $x>=1; $x--){
            for($z = $x; $z >= 1; $z-- ){
                echo "*";
            }
            echo "<br>";
        }
    }
    function r_piramid($tinggi){
        for($x = 1; $x<=$tinggi; $x++){
            for($z = 1; $z <= $x; $z++ ){
                echo "*";
            }
            echo "<br>";
        }
    }

    function hitung_bunga($saldo, $bunga, $periode){

        for($x = 0; $x < $periode; $x++){
            $bulanke = $x + 1;
            $hasil = (($saldo * $bunga / 100) / 12) + $saldo;
            $bulatkan = round($hasil, 2);
            $duit =  number_format($bulatkan,2,",",".");
            echo "Bulan" . $bulanke . " = " . $duit . "<br>";
            $saldo = $bulatkan;
        }
    }
?>