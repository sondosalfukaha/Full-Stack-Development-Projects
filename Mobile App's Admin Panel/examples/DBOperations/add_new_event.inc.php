<?php 
    if(isset($_POST['save']))
{
        $date = $_POST["date"];
        $title  = $_POST["title"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `newevent`(`date`, `title`) VALUES (?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$date,$title]);

        
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