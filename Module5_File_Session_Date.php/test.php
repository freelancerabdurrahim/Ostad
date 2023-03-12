<?php

$fileName = 'H:\Ostad PHP & Laravel\Module5_File_Session_Date.php\php\text.txt';
if (is_readable($fileName)) {
    $fp = fopen($fileName, 'r');
    while ($line = fgets($fp)) {
        echo $line;
    }

    rewind($fp);
    while ($line = fgets($fp)) {
        echo $line;
    }
    fclose($fp);
    // $line= fgets($fp);
    // echo $line;  


    $date = file($fileName);
    $data = file_get_contents($fileName);
    print_r($date);
    echo $data;
}
