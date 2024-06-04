<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && !($_FILES['pic']['error'] == UPLOAD_ERR_NO_FILE) ) {
        $image = $_FILES['pic']['tmp_name'];
        $img = file_get_contents($image);
    try {
            require_once "dbh.inc.php";
            $query = "UPDATE `underaboutus` SET `imageAbout`=? WHERE 1;";
            $stm = $con->prepare($query);
            $stm->execute([$img]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../underaboutus.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../underaboutus.php");
}

?>