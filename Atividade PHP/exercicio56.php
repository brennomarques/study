<?php
    $file = fopen("Alunos/arquivos.txt", "a");
    fclose($file);

    mkdir("Professores", 0777);

    $directoryAlunos = scandir("alunos");
    $directoryProfessor = scandir("Professor");

    function fileExistsIndDiretory($directory){

        if(count($directory) < 3 ) {
            throw new Exception("Error", 1);
        }
    }

    try{
        fileExistsIndDiretory($directoryAlunos);
        fileExistsIndDiretory($directoryProfessor);
    } catch (\Exception $error) {
        $file = fopen("log.txt", "w+");
        fwrite($file, "Arquivo: ".$error->getFile().PHP_EOL);
        fwrite($file, "Linha: ".$error->getLine().PHP_EOL);
        fclose($file);
    }


?>