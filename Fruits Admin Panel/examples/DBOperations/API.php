<?php 
header("Content-Type:application/json");

$dsn = 'mysql:host=localhost;dbname=mobile-adminsite';
$user = 'root';
$password = '';

try {
$con = new PDO( $dsn, $user, $password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo 'CONNECCCCCCCCCCCCCCCCCCTTTTTTTTTTTEEEEEED';
}
catch (PDOException $e){
    echo 'Faild To connect ' .$e->getMessage();
}
$method = $_SERVER['REQUEST_METHOD'];
$path = explode('/',trim($_SERVER['PATH_INFO'],'/'));
$response = array();
switch ($path[0]) {
    case 'attendedcours':
    case 'attendedevent':
    case 'feedback':
    case 'job':
    case 'newevent':
    case 'news':
    case 'newsoonsection':
    case 'policyandprivacy':
    case 'users':
    case 'trainingcourses':
        fetchData($con, $path[0]);
        break;
    default:
        http_response_code(404);
        $response['message'] = "Endpoint Not Found";
        echo json_encode($response);
        exit();
}
$con = null;
//die();
echo json_encode($response);
function fetchData($con,$table){
    global $response;
    $sql = "SELECT * FROM $table";
    $result = $con->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {
        $response = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $response[] = $row;
        }
    }else {
        http_response_code(404);
        $response['message'] = ucfirst($table)."Endpoint Not Found";
    }
}




?>