<?php 
    if(isset($_POST['save']))
{
        $userid = $_POST["userid"];
        //$eventid  = $_POST["eventid"];
        //$eventname  = $_POST["eventname"];
        $courseid  = $_POST["courseid"];
        $coursename  = $_POST["coursename"];        
        $paymentstate  = $_POST["paymentstate"]; 
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `attendedcours` (`userid`, `courseid`, `coursename`, `payment`) VALUES (?,?,?,?);";
        $stm = $con->prepare($query);
        $stm->execute([$userid,$courseid,$coursename,$paymentstate]);
        
        $con = null;
        $stm = null;
        header("Location:../attendedcours.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../attendedcours.php");
}

?>