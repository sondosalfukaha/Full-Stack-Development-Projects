<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $name = $_POST['name'];
    $mealprice = $_POST['mealprice'];
    $sandwichprice = $_POST['sandwichprice'];

    try {
        $sql = "UPDATE burger SET `name` = ?, `mealprice` = ?,`sandwichprice` = ? WHERE `id` = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$name,$mealprice,$sandwichprice,$userId]);
        $con = null;
        $stmt = null;
        header("Location:../Burger.php");
        die();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../Burger.php");
}
?>
