<?php 
    if(isset($_POST['save']))
{
        $username = $_POST["username"];
        $username  = $_POST["phonenumber"];
        $location  = $_POST["location"];
        $order1  = $_POST["order1"];
        $visaorcash  = $_POST["visaorcash"];
        $totalprice  = $_POST["totalprice"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `orders`(`username`, `phonenumber`, `location`,`order1`,`visaorcash`,`totalprice`) VALUES (?,?,?,?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$username,$username,$location,$order1,$visaorcash,$totalprice]);

        
        $con = null;
        $stm = null;
        header("Location:../orders.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../orders.php");
}

?>