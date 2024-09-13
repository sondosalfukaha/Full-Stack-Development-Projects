<?php
//Conncect with database file
    $dsn = 'mysql:host=localhost;dbname=task24';
    $user = 'root';
    $password = '';

    try {
    $con = new PDO( $dsn, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'CONNECCCCCCCCCCCCCCCCCCTTTTTTTTTTTEEEEEED';
    }
    catch (PDOException $e){
        echo 'Faild To connect ' .$e->getMessage();
    }
