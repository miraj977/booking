<?php
include 'header.php';
if(isset($_POST['bookingsubmit']) && isset($_FILES))
{
      //print_r($_POST);
  $to = "everestviewtravesl@gmail.com"; 
  $from = $_POST['email']; 
  $first_name = $_POST['fName'];
  $last_name = $_POST['lName'];
  $mobile= $_POST['mobile'];
  $airline= $_POST['airline'];
  $subject="";
  
  if(isset($_POST['show']) && $_POST['show']=="change")
  { $subject = "Flight Change Request";}
  if(isset($_POST['show']) && $_POST['show']=="cancel")
  { $subject = "Flight Cancel Request";}
  if(isset($_POST['show']) && $_POST['show']=="refund")
  { $subject = "Flight Refund Request";}
  if(isset($_POST['show']) && $_POST['show']=="wheel")
  { $subject = "Wheel Chair Assistance Request";}
  if(isset($_POST['show']) && $_POST['show']=="meal")
  { $subject = "Special Meal Request";}
  if(isset($_POST['show']) && $_POST['show']=="infant")
  { $subject = "Infant Bassinet Request";}
  if(isset($_POST['show']) && $_POST['show']=="seat")
  { $subject = "Seat Allocation Request";}
  
  $booking= $_POST['bookNum'];
  $tkt= $_POST['tktNum'];
  $text_msg= $_POST['message'];
  
  $allowedExtensions = array("pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt");
  
  $files = array();
  foreach($_FILES as $name=>$file) {
    $file_name = $file['name']; 
    $temp_name = $file['tmp_name'];
    $file_type = $file['type'];
    $path_parts = pathinfo($file_name);
    $ext = $path_parts['extension'];
    if(!in_array($ext,$allowedExtensions)) {
      die("File $file_name has the extensions $ext which is not allowed");
    }
    array_push($files,$file);
  }
  

  
  $semi_rand = md5(time()); 
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
  
  // headers for attachment 
  $headers = "From: ".$from;
  $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
  
  // multipart boundary 
  $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n";
  $message .="Mr/Mrs/Ms ".$first_name . " " . $last_name . " wrote the following: \r\n" . $text_msg."
  \r\nInformation of Sender:\r\n"
  ."From: ".$from."\r\n
  First Name: ".$first_name."\r\n
  Last Name: ".$last_name."\r\n
  Mobile No: ".$mobile."\r\n
  Airlines: ".$airline."\r\n
  Booking Ref/PNR: ".$booking."\r\n
  Ticket Number: ".$tkt."\r\n";

  if(isset($_POST['special-meal']))
  { $message .= "\r\n  Meal Request: ".$_POST['special-meal']."\r\n";}

  if(isset($_POST['select-trip']))
  { $message .= "\r\n  Trip: ".$_POST['select-trip']."\r\n";}

  if(isset($_POST['special-seat']))
  { $message .= "\r\n  Seat Request: ".$_POST['special-seat']."\r\n";}

  if(isset($_POST['international']))
  {
    $message .="\r\n  International Flight: Yes\r\n";
  }
  if(isset($_POST['domestic']))
  {
    $message .= "\r\n  Domestic Flight: Yes\r\n";
  } 
  if(isset($_POST['oneway']))
  {
    $message .= "\r\n  One Way: Yes\r\n";
  } 
  if(isset($_POST['return']))
  {
    $message .= "\r\n  Return Flight: Yes\r\n";
  } 
  $message .= "--{$mime_boundary}\n";
  
  // preparing attachments
  for($x=0;$x<count($files);$x++){
    $file = fopen($files[$x]['tmp_name'],"rb");
    $data = fread($file,filesize($files[$x]['tmp_name']));
    fclose($file);
    $data = chunk_split(base64_encode($data));
    $name = $files[$x]['name'];
    $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
    "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    $message .= "--{$mime_boundary}\n";
  }
  $headers2= "From: ".$to;
  $message2 = "Here is a copy of your message Mr/Mrs/Ms " . $first_name . "\n\n" . $text_msg;


  mail($to,$subject,$message,$headers);
  mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
  echo '<div class="jumbotron text-md-center" style="background-color:#7d4a4a !important;margin-top:100px;">
  <center><h1 class="display-3">Thank You!</h1>
  <p class="lead">Your mail has been sent Mr/Mrs/Ms '. $first_name .'</strong>, we will contact you shortly.</p>
  <hr>
  <p class="lead">
  <a class="btn btn-default btn-sm" href="index.php" role="button" style="color:black !important">Continue to homepage</a>
  </p></center>
  </div>';
      //header('Location: thank_you.php'); to redirect to another page.
}
?>
