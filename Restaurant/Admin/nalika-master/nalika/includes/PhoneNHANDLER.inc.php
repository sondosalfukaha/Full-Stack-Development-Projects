<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone = $_POST['phone'];
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `phonenumber` SET `PN`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$phone]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../PhoneNumber.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../PhoneNumber.php");
}

?>