<?php

try{
    $con  = new PDO('mysql:host=localhost;dbname=vendor;','root','');
}
catch (PDOException $ex)
{
    echo $ex->getMessage();
}
