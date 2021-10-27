<?php
    
    $arr = array(0,1,2,3,4,5,6,7,8,9);
    echo "Numeros pares<br><br>";
    foreach ($arr as &$value) {
        if ($value % 2 == 0) {
            echo "$value<br>";
        }
    }

?>
