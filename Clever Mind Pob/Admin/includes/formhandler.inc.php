<?php 
//imageView.php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $H2 = $_POST["H2"];
    $P  = $_POST["P"];
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `imageview` SET `H2`=?,`P`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$H2,$P]);
        //After execute the query close the connection
        $con = null;
        $stm = null;
        header("Location:../imageView.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../imageView.php");
}

?>