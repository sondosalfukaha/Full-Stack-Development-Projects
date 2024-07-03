<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $date = $_POST['date'];
    $Description = $_POST['Description'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    try {
        echo 'hiii first';
        $sql = "UPDATE trainingcourses SET `date`=?,`title`=?,`description`=?,`price`=? WHERE `id`=?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$date,$title,$Description,$price,$userId]);
        echo 'hiii second';
        $con = null;
        $stmt = null;
        header("Location:../TrainingCourses.php");
        die();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../TrainingCourses.php");
}
?>
