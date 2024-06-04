<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Title11 = $_POST["Title11"];
        $Title12  = $_POST["Title12"];
        $Paragraph11  = $_POST["Paragraph11"];
        ////
        $Title21 = $_POST["Title21"];
        $Title22  = $_POST["Title22"];
        $Paragraph21  = $_POST["Paragraph21"];
        ////
        $Title31 = $_POST["Title31"];
        $Title32  = $_POST["Title32"];
        $Paragraph31  = $_POST["Paragraph31"];
    try {
        require_once "dbh.inc.php";
        $query = "UPDATE `ourworks` SET `Title11`=?,`Title12`=?,`Paragraph11`=?,`Title21`=?,`Title22`=?,`Paragraph21`=?,`Title31`=?,`Title32`=?,`Paragraph31`=? WHERE 1;";
        $stm = $con->prepare($query);
        $stm->execute([$Title11,$Title12,$Paragraph11,$Title21,$Title22,$Paragraph21,$Title31,$Title32,$Paragraph31]);
        //After execute the query close the connection
        $con = null;
        $stm = null;
        header("Location:../ourworks.php");
        die();
        
    }
        catch(PDOException $e) {
            die("QUERY failed ".$e->getMessage());
    }
}

else {
    header("Location:../ourworks.php");
}

?>