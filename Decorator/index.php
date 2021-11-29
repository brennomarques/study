<?php
    require_once "autoLoad.php";

    $frances = new Frances();
    $frances = new MozzarellaSalami($frances);
    echo "<br>".$frances->getName()."  R$: ".$frances->value()."<br>";
    echo "<br>";
    
    $frances = new Frances();
    $frances = new Salami($frances);
    echo "<br>".$frances->getName()."  R$: ".$frances->value()."<br>";
    echo "<br>";

    $frances = new Frances();
    $frances = new Mozzarella($frances);
    echo "<br>".$frances->getName()."  R$: ".$frances->value()."<br>";
    echo "<br>";

    $candy = new Candy();
    $candy = new JamSalami($candy);
    echo "<br>".$candy->getName()."  R$: ".$candy->value()."<br>";
    echo "<br>";

    $candy = new Candy();
    $candy = new Salami($candy);
    echo "<br>".$candy->getName()."  R$: ".$candy->value()."<br>";
    echo "<br>";

    $candy = new Candy();
    $candy = new PeanutButter($candy);
    echo "<br>".$candy->getName()."  R$: ".$candy->value()."<br>";
    echo "<br>";


?>