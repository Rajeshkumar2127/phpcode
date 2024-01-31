<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furni";

$conn = new mysqli($servername,$username,$password,$dbname);

// $sql =  "CREATE DATABASE furni";
// $conn->query($sql);

// if($conn->connect_errno>0){
//     echo "nnn";
// }
// else{
//     echo "<h1>something went wrong connection unsuccessfull</h1>";
// }
// if($conn->connect_errno>0){
//     echo "<h1>something went wrong connection unsuccessfull</h1>";
// }
if($conn->connect_error){
echo "sdf";
}
echo "<br>";
// var_dump($conn);
?>