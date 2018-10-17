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