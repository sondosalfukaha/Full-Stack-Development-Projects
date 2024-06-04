<?php
//Conncect with database file
    $dsn = 'mysql:host=localhost;dbname=task19';
    $user = 'root';
    $pass = '';
    /*  $option = array (
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ); */
    try {
    $con = new PDO( $dsn, $user, $pass /*, $option*/);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'CONNECCCCCCCCCCCCCCCCCCTTTTTTTTTTTEEEEEED';
    }
    catch (PDOException $e){
        echo 'Faild To connect ' .$e->getMessage();
    }
