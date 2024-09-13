<?php 
    if(isset($_POST['save_user']))
{
        $fullName = $_POST["fullName"];
        $email  = $_POST["email"];
        $username  = $_POST["username"];
        $phoneNumber  = $_POST["phoneNumber"];
        $Payment  = $_POST["Payment"];        
    try {
        require_once "connection.inc.php";
        $query = "INSERT INTO `users`(`fullname`, `email`, `username`, `phonenumber`, `Payment`) VALUES (?,?,?,?,?)";
        $stm = $con->prepare($query);
        $stm->execute([$fullName,$email,$username,$phoneNumber,$Payment]);
        
        $con = null;
        $stm = null;
        header("Location:../user.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../user.php");
}

?>