<?php 

$severname = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'students';

$conn = new sqli($severname, $username, $password);

if($conn->connect_error){
    die("Connection failed :" .$conn->connect_error);
}
$sql = "CRETE DATABASE students";

if($conn->query($sql)){
   echo "Database Create Successfully" ;
}else{
    echo "Database Error";
}
mysqli_close($conn);
?>