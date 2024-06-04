<?php 
//imageView.php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Tap1 = $_POST["Tap1"];
    $Tap2  = $_POST["Tap2"];
    $Tap3  = $_POST["Tap3"];
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `ourservers` SET `Tab1`=?,`Tab2`=?,`Tab3`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$Tap1,$Tap2,$Tap3]);
        //After execute the query close the connection
        $con = null;
        $stm = null;
        header("Location:../ourservers.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../ourservers.php");
}

?>