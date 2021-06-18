<?php

    var_dump($_POST);
    $myfile = fopen("testfile.txt", "w");
    foreach($_POST as $x => $x_value) {
        echo  $x . ": \t\t\t" . $x_value;
        fwrite($myfile, $x . ": \t\t\t" . $x_value ."\n");
        echo "<br>";
    }
    fclose($myfile);


    $myfileR = fopen("testfile.txt", "r") or die("Unable to open file!");
    echo fread($myfileR,filesize("testfile.txt"));
    fclose($myfileR);

?>