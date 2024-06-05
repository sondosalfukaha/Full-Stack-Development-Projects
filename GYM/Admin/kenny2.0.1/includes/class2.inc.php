<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Title = $_POST['Title'];
        $Description = $_POST['Description'];
    try {
        require_once "connection.inc.php";
            
            $query = "UPDATE `class2` SET `Title`=?,`Description`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$Title,$Description]);
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