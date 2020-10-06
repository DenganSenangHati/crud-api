<html>
    <head>
        <title>Balik Kata</title>
    </head>
    
    <body>
        <form action="" method="POST">
            <input type="text" name="kalimat">
            <input type="submit" value="Submit">
        </form>

        <?php
            $str = $_POST['kalimat'];

            function Reverse($str){ 

                $len = strlen($str); 
            
                if($len == 1){ 
                    return $str; 
                } else { 
                    $len--; 
                    
                    return Reverse(substr($str,1, $len)).substr($str, 0, 1); 
                } 
            } 
            print_r($str);
            echo "<br>";
            print_r(Reverse($str));
        ?>
    </body>
</html> 