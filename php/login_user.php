<?php
if(!isset($_POST)){
    echo "failed";  
}

include_once("dbconnect.php");

$email = $_POST['email'];
$password = sha1($_POST['password']);
$sqllogin = "SELECT * FROM tbl_admin WHERE admin_email = '$email' AND admin_password = '$password'";
$result = $conn->query($sqllogin);
$numrow = $result->num_rows;

if($numrow >0){
    echo "success";
}else{
    echo "failed";
}

?>