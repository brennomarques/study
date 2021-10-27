<?php
    $input = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma
    linguagem de script open source de uso geral, muito utilizada, e especialmente
    adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";

    $str = strtolower($input);
    echo $str."<br>";
    echo "<br>";

    $str = strtoupper($input);
    echo $str."<br>";
    echo "<br>";

    
    $str = lcfirst($input);
    echo $str."<br>";
    echo "<br>";
    
    $str = ucwords($input);
    echo $str."<br>";
    echo "<br>";
?>