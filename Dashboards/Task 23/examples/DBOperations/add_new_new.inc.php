<?php 
    if(isset($_POST['save']))
{
        $New = $_POST["New"];
        $Dexcription  = $_POST["Dexcription"];
        $filename = $_FILES["Image"]["name"];
        $tempname = $_FILES["Image"]["tmp_name"];
        $folder = "Uploads/" . $filename;
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `news`(`new`, `dexcription`, `image`) VALUES (?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$New,$Dexcription,$filename]);

        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
        
        $con = null;
        $stm = null;
        header("Location:../Latestnews.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../Latestnews.php");
}

?>