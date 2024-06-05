<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../Uploads/" . $filename;
    try {
        require_once "connection.inc.php";

        $query = "UPDATE `Icon` SET `Icon`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$filename]);

        // Check if the UPDATE query was successful
        
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder)) {
                echo "<h3>Image uploaded successfully!</h3>";
            } else {
                echo "<h3>Failed to upload image!</h3>";
            }
        
            //echo "<img src=\"../Uploads/".$filename."\">";

        // After execute the query close the connection
        $con = null;
        $stm = null;		
        header("Location:../html/form-file-upload.php");
        die();

    } catch(PDOException $e) {
        die("QUERY failed ".$e->getMessage());
    }
} else {
    header("Location:../html/form-file-upload.php");
    echo "faaaaild";
}
?>
