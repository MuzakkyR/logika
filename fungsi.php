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
?>