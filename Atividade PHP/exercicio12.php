<?php
    $input = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);

    $rand_keys = array_rand($input, 3);
    
    $sum = null;
    for ($i=0;$i<sizeof($rand_keys);$i++)
    {
        $sum = $sum+$rand_keys[$i];
    }
    
    $average = $sum / sizeof($rand_keys);
    var_export($average);
    echo "<br>";
    print($average);
    
?>