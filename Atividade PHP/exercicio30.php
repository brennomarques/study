<?php
    include_once "./functions.php";

    echo "A soma: 4+4: ".sum(4, 4)."<br>";

    echo "<br>";

    $input = 3;
    $check = checkNumber($input);
    if($check){
        echo "O número $input e Par<br>";
    }else{
        echo "O número $input e impar<br>";
    } 
    
    echo "<br>";
    $str = "Brenno";
    echo "A string $str tem um tamanho de ".checkString($str)." caractere.<br>";

?>