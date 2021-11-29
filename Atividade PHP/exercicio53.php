<?php
    $n1 = array(
        "Brenno" =>["nota" =>"10"],
        "Ricado" => ["nota" => "10"],
        "João lima" => ["nota" => "7"],
        "Vitor" => ["nota" =>"8"],
        "Ronaldo" => ["nota" => "9"],
    );
    $n2 = array(
        "Brenno" =>["nota" =>"9,5"],
        "Ricado" => ["nota" => "9"],
        "João lima" => ["nota" => "8"],
        "Vitor" => ["nota" =>"0"],
        "Ronaldo" => ["nota" => "10"],
    );

    foreach($n1 as $k =>$v){
        $nota1 = $n1[$k]['nota'];
        $nota2 = $n2[$k]['nota'];

        $notaFinal= resultado($nota1,$nota2);
        if($notaFinal){
            echo"{$k} - Aprovado<br>";
            $arquivo = fopen('aluno-aprovado.txt','a+');
            fwrite($arquivo, "{$k} - Aprovado"."\r\n");
        }else{
            echo"{$k} - Reprovado<br>";
        }
    }
    fclose($arquivo);

    function  resultado($value1, $value2){
    
        if($value1 > 7 && $value2 > 7){   
            $resultado = ((int)$value1 + (int)$value2);
            return $resultado >=19?  true :  false;
            
        }else{
            return false;
        }
    }
?>