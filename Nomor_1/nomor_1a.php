<?php
    for($x = 1; $x <= 3; $x++){
        for($y = 1; $y <= $x; $y++){
            echo "&nbsp&nbsp";
        }
        for($z = 3; $z > 0; $z--){
            echo "*";
        }
        echo "<br>";
    }

    for($i = 0; $i <= 3; $i++){
        for($j = 3; $j > $i; $j--){
            echo "&nbsp&nbsp";
        }
        for($k = 3; $k > 0; $k--){
            echo "*";
        }
        echo "<br>";
    }
?>