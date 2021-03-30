<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: multipart/form-data; charset=UTF-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "images";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (! $conn) {
  die("Connection failed");
}
$imgdata=base64_encode(file_get_contents($_FILES['image']['tmp_name']));
$name=$_POST['username'];
$folder="D:\\Xampp\\htdocs\\image-backend\\images\\";
$sql="insert into image values(null,'$name','$imgdata')";
$result=mysqli_query($conn,$sql);
if($result){
 echo "Success";
}else{
    echo "failed";
}
?>