<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && !($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) ) {
        $title = $_POST['title'];
        $Description = $_POST['Description'];
        $image = $_FILES['image']['tmp_name'];
        $img = file_get_contents($image);
        
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `about` SET `Title`=?,`Description`=?,`Image`=? WHERE 1";
            $stm = $con->prepare($query);
            $stm->execute([$title,$Description,$img]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../index5.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../index5.php");
}

?>