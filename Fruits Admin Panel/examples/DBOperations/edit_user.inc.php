<?php
include 'connection.inc.php';

if (isset($_POST['save_user'])) {
    $userId = $_POST['id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phoneNumber = $_POST['phoneNumber'];
    $Payment = $_POST['Payment'];

    try {
        $sql = "UPDATE users SET fullname = ?, email = ?, phonenumber = ?, Payment = ?, username = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$fullName,$email,$phoneNumber,$Payment,$username,$userId]);
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
