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