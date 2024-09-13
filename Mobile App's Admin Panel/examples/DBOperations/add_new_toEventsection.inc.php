<?php 
    if(isset($_POST['save']))
{
        $userid = $_POST["userid"];
        $eventid  = $_POST["eventid"];
        $eventname  = $_POST["eventname"];
        
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `attendedevent` (`userid`, `eventid`,`eventname`) VALUES (?,?,?);";

        $stm = $con->prepare($query);
        $stm->execute([$userid,$eventid,$eventname]);
        
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