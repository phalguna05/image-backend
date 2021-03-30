<?php
require_once 'config.php';
$user=$_POST['Username'];
$sql="select * from image where UserName='$user'";
$result=$conn->query($sql);
$ans=[];
while($row=$result->fetch_assoc()){
    $ans[]=$row;
}
echo json_encode($ans);
?>