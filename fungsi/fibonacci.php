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