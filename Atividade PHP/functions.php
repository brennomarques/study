<?php

    function sum($value1, $value2) {
        return $value1+$value2;
    }

    function checkNumber($input) {
        if ($input % 2 == 0) {
            return true;
        }else {
            return false;
        }
    }

    function checkString($input) {
        return strlen($input);
    }

?>