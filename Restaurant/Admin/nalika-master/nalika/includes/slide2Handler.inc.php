<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && !($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) ) {
        $image = $_FILES['image']['tmp_name'];
        $img = file_get_contents($image);
        $description = $_POST['description'];
        $title = $_POST['title'];
        
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `slide2` SET `Image`=?,`Description`=?,`Tiltle`=? WHERE 1";
            $stm = $con->prepare($query);
            $stm->execute([$img,$description,$title]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../slide2.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../slide2.php");
}

?>