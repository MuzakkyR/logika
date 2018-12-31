<?php
include "fungsi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pahamin</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="fungsi">
        <?php include "fungsi/fibonacci.php"; ?>
    </div>
  
    <div class="fungsi">
        <?php include "fungsi/paradom.php"; ?>
    </div>

    <div class="fungsi">
        <?php include "fungsi/binarygap.php"; ?>
    </div>

    <div class="fungsi">
        <?php include "fungsi/piramid.php"; ?>
    </div>

    <div class="fungsi">
        <?php include "fungsi/bunga.php"; ?>
    </div>
</body>
</html>