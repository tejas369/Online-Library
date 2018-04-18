<?php
//$bid=$_REQUEST["bid"];
$bname=$_POST["bname"];
$category=$_POST["category"];
$author=$_POST["author"];
$status="available";
$uid=$_POST["uid"];
$conn=mysqli_connect('localhost','root','','tbbs');

$target_dir = "C:/xampp/htdocs/wtfinal/";
$target_file = $target_dir.basename($_FILES["imageOfbook"]["name"]);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["imageOfbook"]["tmp_name"], $target_file)) {

$image=$_FILES["imageOfbook"]["name"];

$query1="INSERT into book(bname,category,author,status,uid,images) VALUES ('".$bname."','".$category."','".$author."','".$status."','".$uid."','".$image."')";

$result=mysqli_query($conn,$query1);
if ($result) {
	header('Location: thank.html');
    
} else {
    echo 
header("location: error.html");
}
    } 



?>