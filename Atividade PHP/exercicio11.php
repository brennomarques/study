<?php
    $arr = array("Ronaldo","Vitor","Lucas","Matheus","Fernando","Junio","Feluipe","Battosai","Igor","Brenno");
    
    
    echo "Os nomes são: <br><br>";

    for ($i=0;$i<sizeof($arr);$i++)
    {
        echo "$i - $arr[$i] <br>";
    }

?>