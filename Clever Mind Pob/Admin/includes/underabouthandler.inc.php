<?php 
//imageView.php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Item1 = $_POST["Item1"];
    $Item2  = $_POST["Item2"];
    $Item3  = $_POST["Item3"];
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `underaboutus` SET `Item1`=?,`Item2`=?,`Item3`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$Item1,$Item2,$Item3]);
        $con = null;
        $stm = null;
        header("Location:../underaboutus.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../underaboutus.php");
}

?>