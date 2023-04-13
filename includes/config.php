<?php
//time zone
date_default_timezone_set('Asia/Dhaka');
//database connection
$con=mysqli_connect("localhost","root","","covid19");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
