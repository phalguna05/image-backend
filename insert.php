<?php
require_once 'config.php';
$UserName=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$sql = "INSERT INTO users(UserName,Email,Password) VALUES ('$UserName','$Email','$Password')";

if ($conn->query($sql) === TRUE) {
  echo $UserName;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>