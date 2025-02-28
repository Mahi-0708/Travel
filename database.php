

<?php
$host="localhost";
$user="root";
$pass="";
$db="demo1";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    echo "DB connected";
}
else{
    echo "DB not created";
}
?>