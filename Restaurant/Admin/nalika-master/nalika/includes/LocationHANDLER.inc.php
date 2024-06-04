<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `location` SET `Location`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$text]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../Location.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../Location.php");
}

?>