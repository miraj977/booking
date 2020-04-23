<?php

$server = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $server)){
$conn = new mysqli("sql201.epizy.com","epiz_25073873","oGr6Y1exqzwC9","epiz_25073873_booking");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$selected = mysqli_select_db($conn,"epiz_25073873_booking")
  or die("Could not select everestpnr");
}
else
{
  $conn = new mysqli("localhost","root","root","booking");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$selected = mysqli_select_db($conn,"booking")
  or die("Could not select booking");
}
// Check connection
?>
