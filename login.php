<?php
require_once 'config.php';
$UserName=$_POST['Username'];
$Password=$_POST['Password'];
$sql="Select UserName,Password from users where UserName='$UserName'";
$result=$conn->query($sql);
if($result->num_rows==0){
echo json_encode("false");
}
else{
$flag=0;
while($row = $result->fetch_assoc()) {
    if($row['UserName']==$UserName && $row['Password']==$Password){
	echo json_encode("true");
	$flag=1;
	break;
	}
  }
  if($flag==0){
  echo json_encode("false");
  }
  }
  $conn->close();
  ?>