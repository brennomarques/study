<?php
    $homepage = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/distritos');

    $obj = new StdClass;

    $obj->data = $homepage;

    var_export($obj);

?>