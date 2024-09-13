<?php 
    if(isset($_POST['save']))
{
        $date = $_POST["date"];
        $title  = $_POST["title"];
        $Description  = $_POST["Description"];
        $filename = $_FILES["Image"]["name"];
        $tempname = $_FILES["Image"]["tmp_name"];
        $folder = "Uploads/" . $filename;
        $price  = $_POST["price"];
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `trainingcourses`(`date`, `title`, `Description`,`picture`,`price`) VALUES (?,?,?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$date,$title,$Description,$filename,$price]);

        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
        
        $con = null;
        $stm = null;
        header("Location:../TrainingCourses.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../TrainingCourses.php");
}

?>