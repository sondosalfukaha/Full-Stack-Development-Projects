<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Title = $_POST['Title'];
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `title` SET `Title`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$Title]);
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