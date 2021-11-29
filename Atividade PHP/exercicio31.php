<?php
    $homepage = file_get_contents('https://rickandmortyapi.com/api');


    $input  = array($homepage);


    if(empty($input)){
        echo "Você não pode continuar";
    }else {
        if(is_array($input)) {
            var_dump($input);
        }else {
            echo "Tipo de dado é diferente de array";
        }
    }

?>