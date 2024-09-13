<?php 
    if(isset($_POST['save']))
{
        $title = $_POST["title"];
        $Experience  = $_POST["Experience"];
        $filename = $_FILES["Image"]["name"];
        $tempname = $_FILES["Image"]["tmp_name"];
        $folder = "Uploads/" . $filename;

        $filename2 = $_FILES["cv"]["name"];
        $tempname2 = $_FILES["cv"]["tmp_name"];
        $folder2 = "Uploads/" . $filename2;
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `job`(`title`, `experience`, `picture`,`cv`) VALUES (?,?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$title,$Experience,$filename,$filename2]);

        if ((move_uploaded_file($tempname, $folder)) && (move_uploaded_file($tempname2, $folder2))) {
            echo "<h3>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
        
        $con = null;
        $stm = null;
        header("Location:../job.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../job.php");
}

?>