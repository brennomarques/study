<?php
    $input1 = fopen("file1.txt", "w");
    $input2 = fopen("file2.txt", "w");
    $input2 = fopen("file3.txt", "w");

    fwrite($input1, file_get_contents("https://jsonplaceholder.typicode.com/photos"));
    fwrite($input2, file_get_contents("https://jsonplaceholder.typicode.com/photos"));
    fwrite($input2, file_get_contents("https://jsonplaceholder.typicode.com/photos"));

    fclose($input1);
    fclose($input2);
    fclose($input3);

    unlink('file2.text');

    function openFile($fileName){
        $file = fopen($fileName, 'r');

        if (!$file) {
            throw new Exception('O arquivo não foi encontrado');
        }

        $array = file($fileName);

        var_export($array);
    }

    try{
        openFile('file1.txt');
        openFile('file2.txt');
    }catch(Exception $error){
        echo $error->getMessage();
    }

?>