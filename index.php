<?php
include "fungsi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="fungsi">
        <h2>Fibonacci</h2>
        <form action="index.php" method="get">
            Masukkan jumlah bilangan fibonacci
            <input type="number" name="input_fibo">
            <input type="submit" name="btn_fibo" value="Submit">
        </form>
        <?php
            if(isset($_GET['btn_fibo']) AND $_GET['input_fibo'] != null){

                $jumlah = $_GET['input_fibo'] - 2;
                if($jumlah >= 0){
                    fibonacci($jumlah);
                } else{
                    echo "Input harus lebih dari 1";
                }

            } elseif(isset($_GET['btn_fibo']) AND $_GET['input_fibo'] == null){
                
                echo "isi kolom dengan angka";
            
            }
        ?>   
    </div>
  
    <div class="fungsi">
        <h2>Membalik Kalimat</h2>
        <form action="index.php" method="get">
            Masukkan Kalimat
            <input type="text" name="kalimat">
            <input type="submit" value="Submit" name="btn_reverse">
        </form>
        <?php
            if(isset($_GET['btn_reverse']) AND $_GET['kalimat'] != null){
                $normal = $_GET['kalimat'];
               revpalindrom($normal);
            } elseif(isset($_GET['btn_reverse']) AND $_GET['kalimat'] != null){
                echo "isi kolom dengan kalimat atau kata";
            }
        ?>
    </div>

    <div class="fungsi">
        <h2>Menghitup gap biner</h2>
        <form action="index.php" method="get">
            Masukkan angka
            <input type="number" name="input_biner" id="">
            <input type="submit" value="Submit" name="btn_biner">
        </form>

        <?php
            if(isset($_GET['btn_biner']) AND $_GET['input_biner']){
                $angka = $_GET['input_biner'];
                binergap($angka);
            }
        ?>
    </div>

    <div class="fungsi">
        <h2>Membuat Piramid</h2>
        <form action="index.php" method="get">
            Masukkan Tinggi
            <input type="number" name="input_piramid">
            <input type="submit" value="Submit" name="btn_piramid">            
        </form>
        <div class="tampil_piramid">
            <?php
                if(isset($_GET['btn_piramid']) AND $_GET['input_piramid']){
                    $tinggi = $_GET['input_piramid'];
                    echo"<div class='satu'>";
                        piramid($tinggi);
                    echo"</div>";
                    echo"<div class='satu'>";
                        revpiramid($tinggi);
                    echo"</div>";
                    echo"<div class='satu'>";
                        l_piramid($tinggi);
                    echo"</div>";
                    echo"<div class='satu'>";
                        r_piramid($tinggi);
                    echo"</div>";
                }
            ?>
        </div>
    </div>

    <div class="fungsi">
        <h2>Menghitung Bunga</h2>
        <input type="number" name="input_saldo">
        <input type="number" name="input_bunga">
        <input type="number" name="input_periode">
        <input type="submit" value="Hitung" name="btn_bunga">
        <?php
            if(isset($_GET['btn_bunga']) AND $_GET['input_saldo']){
                
            }
        ?>
    </div>
</body>
</html>