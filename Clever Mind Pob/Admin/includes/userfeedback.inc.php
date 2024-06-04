<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Description = $_POST["Description"];
        $C1  = $_POST["C1"];
        $D1  = $_POST["D1"];
        ////
        $C2 = $_POST["C2"];
        $D2  = $_POST["D2"];
        
        ////
        $C3 = $_POST["C3"];
        $D3  = $_POST["D3"];
        
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `userfeed` SET `Description`=?,`C1`=?,`D1`=?,`C2`=?,`D2`=?,`C3`=?,`D3`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$Description,$C1,$D1,$C2,$D2,$C3,$D3]);
        //After execute the query close the connection
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