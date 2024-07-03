<?php 
    if(isset($_POST['save']))
{
        $title  = $_POST["title"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `newsoonsection`(`title`) VALUES (?)";
        $stm = $con->prepare($query);
        $stm->execute([$title]);

        
        $con = null;
        $stm = null;
        header("Location:../LastEvents.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../LastEvents.php");
}

?>