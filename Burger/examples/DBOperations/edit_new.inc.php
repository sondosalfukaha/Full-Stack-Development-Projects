<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $snackname = $_POST['snackname'];
    $snackmealprice = $_POST['snackmealprice'];
    $snacksandwichprice = $_POST['snacksandwichprice'];

    try {
                $sql = "UPDATE snacks SET `snackname` = ?, `snackmealprice` = ?, `snacksandwichprice`=? WHERE `id` = ?";
                $stmt = $con->prepare($sql);
                $stmt->execute([$snackname, $snackmealprice,$snacksandwichprice, $userId]);
                $con = null;
                $stmt = null;
                header("Location:../Snacks.php");
                die();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        else {
            header("Location:../Snacks.php");
        }
        ?>