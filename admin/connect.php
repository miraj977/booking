<?php

$server = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $server)){
$conn = new mysqli("mysql-5.everestviewtravels.com.au","myword6815","oT8j74uu","wordpress381180_everestviewtravels_com_au");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$selected = mysqli_select_db($conn,"wordpress381180_everestviewtravels_com_au") 
  or die("Could not select everestpnr");
}
else
{
  $conn = new mysqli("localhost","root","root","everestpnr");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$selected = mysqli_select_db($conn,"everestpnr") 
  or die("Could not select everestpnr");
}
// Check connection
?>