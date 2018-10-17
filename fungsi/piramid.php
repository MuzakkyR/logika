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