<?php

    function checkArray($array) {
        print_r($array);
        echo "<br>";
        echo "<br>";

        if (!is_array($array)) {
            return 0;
        }

        $res = count($array);

        if ($res < 3) {
            echo "Não fornecido categoria minima";
            return 0;
        }

        foreach ($array as $row)
        {
            foreach($row as $i => $a)
            { 
                echo '<div>'. $i." ".$a .'</div>';
                if ($i >= 3 && $i <= 6) {
                    echo '<div>'. $i." ".$a .'</div>';
                }else{
                    echo "A categoria salgados não obedece a quantidade mínima de itens, cadastre mais itens.";
                    return 0;
                }
            }
        }

    }

?>