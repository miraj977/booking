<?php function sendSMS($content) {
        $ch = curl_init('https://api.smsbroadcast.com.au/api-adv.php');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec ($ch);
        curl_close ($ch);
        return $output;    
    }
    $username = 'EverestViewTravels';
    $password = 'Vyu74BEN';
    $destination = '0411381165'; //Multiple numbers can be entered, separated by a comma
    $source    = 'EVERESTVIEW';
    $text = 'Dear Customer,
We wish you a Happy Journey.
We are happy to assist you with any difficulty you may have during your trip.
Drop us an E-mail for any assistance.';
    $ref = 'abc123';
        
    $content =  'username='.rawurlencode($username).
                '&password='.rawurlencode($password).
                '&to='.rawurlencode($destination).
                '&from='.rawurlencode($source).
                '&message='.rawurlencode($text).
                '&ref='.rawurlencode($ref);
  
    $smsbroadcast_response = sendSMS($content);
    $response_lines = explode("\n", $smsbroadcast_response);
    
     foreach( $response_lines as $data_line){
        $message_data = "";
        $message_data = explode(':',$data_line);
        if($message_data[0] == "OK"){
            echo "The message to ".$message_data[1]." was successful, with reference ".$message_data[2]."\n";
        }elseif( $message_data[0] == "BAD" ){
            echo "The message to ".$message_data[1]." was NOT successful. Reason: ".$message_data[2]."\n";
        }elseif( $message_data[0] == "ERROR" ){
            echo "There was an error with this request. Reason: ".$message_data[1]."\n";
        }
    }?>