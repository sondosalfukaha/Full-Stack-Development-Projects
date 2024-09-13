<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $location = $_POST['location'];
    $order1 = $_POST['order1'];
    $visaorcash = $_POST['visaorcash'];
    $totalprice = $_POST['totalprice'];

    try {
        $sql = "UPDATE orders SET `username`=?,`phonenumber`=?,`location`=?,`order1`=?, `visaorcash`=?, `totalprice`=? WHERE `id`=?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$username,$phonenumber,$location,$order1,$visaorcash,$totalprice,$userId]);
        $con = null;
        $stmt = null;
        header("Location:../orders.php");
        die();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../orders.php");
}
?>
