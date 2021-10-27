<?php

    function inputPrint($input) {
        foreach($input as $chave => $valor){
            echo "{$chave}: {$valor}<br>";
        }
    };

    $input1 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);
    $input2 = array(17,18,19,20,21,22,23,24,25);
    $input3 = array(17,18,19,20,21,22,23,24,25);
    $input4 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);
    $input5 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);

    inputPrint($input1);

    echo "<br>";
    echo "Imprimir todos os Arry";
    echo "<pre>";
    var_export($input1);
    echo "<pre>";
    var_export($input2);
    echo "<pre>";
    var_export($input3);
    echo "<pre>";
    var_export($input4);
    echo "<pre>";
    var_export($input5);

?>