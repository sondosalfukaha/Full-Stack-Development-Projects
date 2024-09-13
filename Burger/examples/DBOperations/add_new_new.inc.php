<?php 
    if(isset($_POST['save']))
{
        $snackname  = $_POST["snackname"];
        $snackmealprice = $_POST["snackmealprice"];
        $snacksandwichprice = $_POST["snacksandwichprice"];
        
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `snacks`(`snackname`, `snackmealprice`, `snacksandwichprice`) VALUES (?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$snackname,$snackmealprice,$snacksandwichprice]);

        
        $con = null;
        $stm = null;
        header("Location:../snacks.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../snacks.php");
}

?>