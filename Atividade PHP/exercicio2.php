<?php
    $array1 = array("PHP", "Java", "Python", "JavaScript");
    $array2 = array("João", "Pedro", "Felipe", "Ronaldo");
    $array3 = array("Centro", "Zona sul", "Zona Oeste");

    foreach ($array1 as &$value) {
        echo $value;
        echo "<br>";
    }
    echo "**********<br>";
    foreach ($array2 as &$value) {
        echo $value;
        echo "<br>";
    }
    echo "**********<br>";
    foreach ($array3 as &$value) {
        echo $value;
        echo "<br>";
    }

?>
