<?php
require_once 'config.php';
$sql="select * from image";
$result=$conn->query($sql);
$ans=[];
while($row=$result->fetch_assoc()){
    $ans[]=$row;
}
echo json_encode($ans);
?>