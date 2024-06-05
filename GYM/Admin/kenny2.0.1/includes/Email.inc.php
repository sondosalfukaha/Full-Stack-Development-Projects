<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = $_POST['Email'];
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `Email` SET `Email`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$Email]);
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