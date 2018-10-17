<h2>Menghitung Bunga</h2>
        <form action="index.php" method="get">
            Masukkan saldo : 
            <input type="number" name="input_saldo">
            Masukkan bunga % :
            <input type="number" name="input_bunga">
            Masukkan Periode  / bulan :
            <input type="number" name="input_periode">
            <input type="submit" value="Hitung" name="btn_bunga">
            <?php
                if(isset($_GET['btn_bunga'])  AND 
                         $_GET['input_saldo'] AND 
                         $_GET['input_bunga'] AND 
                         $_GET['input_periode']){
                    $saldo = $_GET['input_saldo'];
                    $bunga = $_GET['input_bunga'];
                    $periode = $_GET['input_periode'];
                    echo "<br>";
                    hitung_bunga($saldo, $bunga, $periode);
                }
            ?>
        </form>