<?php 
    if(isset($_POST['save']))
{
        $username = $_POST["username"];
        $username  = $_POST["phonenumber"];
        $location  = $_POST["location"];
        $order1  = $_POST["order1"];
        $mealorsandwich  = $_POST["mealorsandwich"];
        $totalprice  = $_POST["totalprice"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `orders`(`username`, `phonenumber`, `location`,`order1`,`mealorsandwich`,`totalprice`) VALUES (?,?,?,?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$username,$username,$location,$order1,$mealorsandwich,$totalprice]);

        
        $con = null;
        $stm = null;
        header("Location:../Order.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../Order.php");
}

?>