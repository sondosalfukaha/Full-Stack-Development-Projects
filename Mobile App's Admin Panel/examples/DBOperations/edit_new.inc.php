<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $new = $_POST['New'];
    $description = $_POST['Dexcription'];

    try {
                $sql = "UPDATE news SET `new` = ?, `Dexcription` = ? WHERE `id` = ?";
                $stmt = $con->prepare($sql);
                $stmt->execute([$new, $description, $userId]);
                $con = null;
                $stmt = null;
                header("Location:../Latestnews.php");
                die();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        else {
            header("Location:../Latestnews.php");
        }
        ?>