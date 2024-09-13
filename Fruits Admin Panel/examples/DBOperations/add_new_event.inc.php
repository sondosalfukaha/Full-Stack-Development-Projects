<?php 
    if(isset($_POST['save']))
{
        $name = $_POST["name"];
        $mealprice  = $_POST["mealprice"];
        $sandwichprice  = $_POST["sandwichprice"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `burger`(`name`, `mealprice`,`sandwichprice`) VALUES (?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$name,$mealprice,$sandwichprice]);

        
        $con = null;
        $stm = null;
        header("Location:../Burger.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../Burger.php");
}

?>