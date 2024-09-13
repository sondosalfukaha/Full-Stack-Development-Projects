<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $name = $_POST['fruitname'];
    $price = $_POST['fruitprice'];

    try {
                $sql = "UPDATE newfruits SET `name` = ?, `price` = ? WHERE `id` = ?";
                $stmt = $con->prepare($sql);
                $stmt->execute([$name, $price, $userId]);
                $con = null;
                $stmt = null;
                header("Location:../NEW FRUITS.php");
                die();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        else {
            header("Location:../NEW FRUITS.php");
        }
        ?>