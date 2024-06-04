<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && !($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) ) {
        $image = $_FILES['image']['tmp_name'];
        $img = file_get_contents($image);
        
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `favicon` SET `favicon`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$img]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../favicon.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../favicon.php");
}

?>