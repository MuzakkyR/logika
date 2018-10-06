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
</head>
<body>
    <div class="fibonacci" style="margin:20px; padding:20px;">
    <h2>Fibonacci</h2>
    <form action="index.php" method="get">
        Masukkan jumlah bilangan fibonacci
        <input type="number" name="input_fibo">
        <input type="submit" name="fibo" value="Submit">
    </form>
    <?php
        if(isset($_GET['fibo']) AND $_GET['input_fibo'] != null){

            $jumlah = $_GET['input_fibo'] - 2;
            if($jumlah >= 0){
                fibonacci($jumlah);
            } else{
                echo "Input harus lebih dari 1";
            }

        } elseif(isset($_GET['fibo']) AND $_GET['input_fibo'] == null){
            
            echo "isi kolom dengan angka";
        
        }
    ?>   
    </div>
  
    <div class="reversekalimat" style="margin:20px; padding:20px;">
        <h2>Membalik Kalimat</h2>
        <form action="index.php" method="get">
            Masukkan Kalimat
            <input type="text" name="kalimat">
            <input type="submit" value="Submit" name="reverse">
        </form>
        <?php
            if(isset($_GET['reverse']) AND $_GET['kalimat'] != null){
                $normal = $_GET['kalimat'];
               revpalindrom($normal);
            } elseif(isset($_GET['reverse']) AND $_GET['kalimat'] != null){
                echo "isi kolom dengan kalimat atau kata";
            }
        ?>
    </div>

    <div class="binarygap" style="margin:20px; padding:20px;">
        <h2>Menghitup gap biner</h2>
        <form action="index.php" method="get">
            Masukkan angka
            <input type="number" name="input_biner" id="">
            <input type="submit" value="Submit" name="biner">
        </form>

        <?php
            if(isset($_GET['biner']) AND $_GET['input_biner']){
                $angka = $_GET['input_biner'];
                binergap($angka);
            }
        ?>
    </div>
</body>
</html>