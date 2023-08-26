<?php

$a = $_POST['email'];
$b = $_POST['password'];
$con = mysqli_connect("localhost","root","","webproject");
$sql = "SELECT * FROM signup WHERE Email = '$a' and Password = '$b'";
$res = mysqli_query($con,$sql);
$count = mysqli_fetch_assoc($res);
// echo $count;
if($count){
    echo "Successfully login";
}
else {
   echo "failed to login";
}

?>