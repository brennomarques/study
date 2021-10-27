<?php
    $homepage = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes');


    $input  = array($homepage);

    var_export($input);

?>