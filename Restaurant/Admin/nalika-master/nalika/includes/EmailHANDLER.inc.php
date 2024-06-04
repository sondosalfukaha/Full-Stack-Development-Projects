<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['Email'];
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `email` SET `Email`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$email]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../Email.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../Email.php");
}

?>