<?php
    $bilangan = $_POST["bilangan"];

    if ($bilangan >= 1){
        echo "Faktorial secara ascending: <br>";

        for($i = 1; $i <= $bilangan; $i++){
            // Set nilai awal
            $faktorial = 1;

            echo $i."! = ";

            for($j = $i; $j > 0; $j--){
                if($j == 1){
                    echo " 1 = ".$faktorial;
                } else {
                    echo $j." x ";
                }
                $faktorial *= $j;
            }
            echo "<br>";
        }
    } else if($bilangan == 0) {
        echo "0! = 1";
    } else {
        echo "Bilangan yang anda masukkan salah";
    }
?>