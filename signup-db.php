<?php
$con = mysqli_connect("localhost","root","","webproject");
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['tel'];
$d = $_POST['password'];

$sql = "INSERT INTO signup(Name,Email,Phone,Password) VALUES('$a','$b','$c','$d')";
mysqli_query($con,$sql);
echo "Your Sign up is Succesfull";

?>  