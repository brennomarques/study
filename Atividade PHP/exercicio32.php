<?php

    include_once "./menuFunction.php";

    $food1 = array(
            'salty'  => array('Pastel', 'Coxinha', 'Amaricano'), 
            'follow_up'  => array('Arroz', 'Feijão properio','Salada'),
            'soda' => array('Coca-cola', 'Guarana ','Fanta','Pepis'),
    );

    $food2 = array(
        array("Conta"=>"FRANCIELE OLIVEIRA", "CPF"=>"888.888.888-88","Telefone Res."=>'(00) 0000-0000'),
        array("Conta"=>"BEATRIX BEHN", "CPF" => "888.888.888-88","Telefone Res."=>'(00) 0000-0000')
    );


    $result = checkArray($food1);
    print_r($result);
    echo "<br>";

?>