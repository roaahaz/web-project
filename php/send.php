<?php
// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connect";

// إنشاء الإتصال
$con =new mysqli($servername, $username, $password, $dbname);
// إختبار الإتصال
if(!$con) { 
echo "there are some problem while connecting the database";
}
$Name= $_POST['Name'];
$Service= $_POST['Service'];
$email= $_POST['email'];
$date= $_POST['date'];
$message= $_POST['message'];

$qry="INSERT INTO `conn`( `Name`, `Service`, `email`, `date`, `message`) VALUES ('$Name','$Service','$email','$date','$message')";
$insert = mysqli_query($con,$qry);

if(!$insert){
echo "there are some problem while inserting data";
} 
else {
echo "Booking has been made YAAY ,a text message will be sent to remind you of the appointment<3";
}


?>