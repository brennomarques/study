<?php

    $input1 = 1;
    $input2 = 2;
    $input3 = 7;

    $i = 0;
    while ($i > -1):
        if ($input1 && $input2 && $input3 % 2 == 0){
            $i = -1;
            echo $input1."<br>";
            echo $input2."<br>";
            echo $input3."<br>";
        }else{
            if ($input1 % 2 == 0) {
                echo $input1."<br>";
                $i++;
            }else {
                $input1 += 1;
                $i++;
            }
            
            if ($input2 % 2 == 0){
                echo $input2."<br>";
                $i++;
            }else {
                $input2 += 1;
                $i++;
            }

            if ($input3 % 2 == 0){
                echo $input3."<br>";
                $i++;
            }else {
                $input3 += 1;
                $i++;
            }
        }        
    endwhile;

    echo "Motrar todas novamentes<br>";
    echo $input1."<br>";
    echo $input2."<br>";
    echo $input3."<br>";
?>