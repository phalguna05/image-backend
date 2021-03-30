<?php 
require_once 'config.php';
$id=$_POST['ImageId'];
$sql="Delete from image where ImageId=$id";
if(mysqli_query($conn,$sql)){
    echo json_encode("true");
}
else{
    echo json_encode("false");
}
?>
