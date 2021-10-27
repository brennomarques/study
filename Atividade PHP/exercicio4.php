<?php
    $array1 = array("PHP", "Java", "Python", "JavaScript");
    $array2 = array("João", "Pedro", "Felipe", "Ronaldo");

    foreach ($array1 as &$value) {
        echo $value;
        echo "<br>";
    }
    echo "<br>";
    $result = array_merge($array1, $array2);
    var_export($result);

?>
