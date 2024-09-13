<?php 
    if(isset($_POST['save']))
{
        $fruitname  = $_POST["fruitname"];
        $fruitprice = $_POST["fruitprice"];

        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "Uploads/" . $filename;
        
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `newfruits`(`name`, `price`, `imagePath`) VALUES (?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$fruitname,$fruitprice,$filename]);

        if ((move_uploaded_file($tempname, $folder))) {
            echo "<h3>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
        $con = null;
        $stm = null;
        header("Location:../NEW FRUITS.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../NEW FRUITS.php");
}

?>