<?php

    $input=file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");
    // $input = json_decode($dados);

    $input= fopen("paises.txt", "w");

    fwrite($input, $input);

    if(is_array($input)){
        echo "sim.<br><br>";
    }else{
        echo "Nâo.<br><br>";
    };
    fclose($input);
    echo "O arquivo foi criado com sucesso!!!";
    var_dump($input);

?>