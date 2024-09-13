<?php 
    if(isset($_POST['save']))
{
        $text = $_POST["text"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `policyandprivacy`(`text`) VALUES (?)";
        $stm = $con->prepare($query);
        $stm->execute([$text]);

        $con = null;
        $stm = null;
        header("Location:../policyandprivacy.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../TrainingCourses.php");
}

?>