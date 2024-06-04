<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && !($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) ) {
        $image = $_FILES['image']['tmp_name'];
        $img = file_get_contents($image);
        $Name = $_POST['Name'];
        $feedback = $_POST['feedback'];
        
    try {
        require_once "connection.inc.php";
            $query = "UPDATE `client2` SET `Image`=?,`Name`=?,`Feedback`=? WHERE  2";
            $stm = $con->prepare($query);
            $stm->execute([$img,$Name,$feedback]);
            //After execute the query close the connection
            $con = null;
            $stm = null;
            header("Location:../client2.php");
            die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../client2.php");
}

?>