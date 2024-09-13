<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['userid'];
    $feedback = $_POST['feedback'];
    $id = $_POST['id'];

    try {
                $sql = "UPDATE feedback SET `userId` = ?, `feedback` = ? WHERE `id` = ?";
                $stmt = $con->prepare($sql);
                $stmt->execute([$userId, $feedback, $id]);
                $con = null;
                $stmt = null;
                header("Location:../Feedback.php");
                die();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        else {
            header("Location:../Feedback.php");
        }
        ?>