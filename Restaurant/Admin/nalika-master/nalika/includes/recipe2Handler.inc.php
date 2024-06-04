<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && !($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) ) {
        $image = $_FILES['image']['tmp_name'];
        $img = file_get_contents($image);
        $Rec_Name = $_POST['Rec_Name'];
        $cost = $_POST['cost'];
        
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `recip2` SET `Image`=?,`Rec_Name`=?,`cost`=? WHERE 1";
            $stm = $con->prepare($query);
            $stm->execute([$img,$Rec_Name,$cost]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../Recipe2.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../Recipe2.php");
}

?>