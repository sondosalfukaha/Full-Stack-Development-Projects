<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $WName = $_POST['WName'];
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `WName` SET `WName`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$WName]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../html/form-element.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../html/form-element.php");
}

?>