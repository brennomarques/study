<?php

    $variable1 = "br";
    // $variable1 = null;
    // $variable1 = array("Ronaldo","Vitor","Lucas","Matheus","Fernando","Junio","Feluipe","Battosai","Igor","Brenno");

    if (is_null($variable1)) {
        echo "Essa variavel é nula";
    }elseif(!is_array($variable1)) {
        echo "Essa variavel nao é Arry";
    }else {
        echo "<pre>";
        var_export($variable1);
        
    }
?>