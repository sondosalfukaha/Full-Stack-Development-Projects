<?php 
//imageView.php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title1 = $_POST["Title1"];
    $Title2  = $_POST["Title2"];
    $Description = $_POST["Descriptionn"];
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `aboutus` SET `Title1`=?,`Title2`=?,`Description1`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$Title1,$Title2,$Description]);
        //After execute the query close the connection
        $con = null;
        $stm = null;
        header("Location:../aboutus.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../aboutus.php");
}

?>