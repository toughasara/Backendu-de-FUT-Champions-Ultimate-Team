<?php 

$host= "localhost";
$username= "root";
$password= "";
$dbname= "br8_ultm";

$conn = mysqli_connect( $host, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Not Connected";
    exit();
}
else{
    echo "Is Connected";
}

?>