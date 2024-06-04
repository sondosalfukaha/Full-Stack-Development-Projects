<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST["Name"];
        $Location  = $_POST["Location"];
        $PN  = $_POST["PN"];
        ////
        $Email = $_POST["Email"];
        $Instagram  = $_POST["Instagram"];
        
        ////
        $Twitter = $_POST["Twitter"];
        $Facebook  = $_POST["Facebook"];
        
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `footer` SET `Name`=?,`Location`=?,`PN`=?,`Email`=?,`Instagram`=?,`Twitter`=?,`Facebook`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$Name,$Location,$PN,$Email,$Instagram,$Twitter,$Facebook]);
        //After execute the query close the connection
        $con = null;
        $stm = null;
        header("Location:../footer.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../footer.php");
}

?>