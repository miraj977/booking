<?php
include('connect.php');
 	header('Content-type: application/json');
        // use prepared statements!
 		$tkt=strtoupper($_POST['ticket']);
        $results="SELECT * FROM `booking` WHERE `ticket`='".$tkt."'";
        $result = $conn->query($results);
        $row = $result->fetch_assoc(); 
        	
         		// send the data encoded as JSON
		        $json = array('booking' => $row['booking'], 
		                    'fname' => $row['fname'],
		                	'mname' => $row['mname'],
		            		'lname' => $row['lname'],
		        			'mobile' => $row['mobile'],
		    				'email' => $row['email'],
							'airline' => $row['airline']);		              
				echo json_encode($json );
			
        exit;
?>
