<?php
include 'connection.inc.php';

if (isset($_POST['save_user'])) {
    $userId = $_POST['id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phoneNumber = $_POST['phoneNumber'];
    $dob = $_POST['dob'];

    try {
        $sql = "UPDATE users SET name = ?, email = ?, username = ?, phone_number = ?, data_of_birth = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$fullName,$email,$username,$phoneNumber,$dob,$userId]);
        $con = null;
        $stmt = null;
        header("Location:../user.php");
        die();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../user.php");
}
?>
