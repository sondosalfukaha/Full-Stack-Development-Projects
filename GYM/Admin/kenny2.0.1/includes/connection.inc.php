<?php
//Conncect with database file
    $dsn = 'mysql:host=localhost;dbname=task21';
    $user = 'root';
    $pass = '';

    try {
    $con = new PDO( $dsn, $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'CONNECTED';
    }
    catch (PDOException $e){
        echo 'Faild To connect ' .$e->getMessage();
    }
