<?php
    function pegaClasse($nameClass){
        require_once("breads".DIRECTORY_SEPARATOR.$nameClass . ".php");
    }

    spl_autoload_register("pegaClasse");
?>