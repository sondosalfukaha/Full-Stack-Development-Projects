<?php 
    if(isset($_POST['save']))
{
        $userid = $_POST["userid"];
        $feedback  = $_POST["feedback"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `feedback`(`userid`, `feedback`) VALUES (?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$userid,$feedback]);
        
        $con = null;
        $stm = null;
        header("Location:../feedback.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../feedback.php");
}

?>