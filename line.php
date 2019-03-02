 <?php
  

function send_LINE($msg){
 $access_token = '76e+98oq6oDHMvLf2LCBlWiMxNn0q70QpA1VmNpC2dJHfdjXmwVyo/iN8pbHbrcsGCQX4mL7h0ivr3gZQHuOme/IGN424ki55qFkcafN9PMml7GrVq20oeLYSkiz21WYdjsENHIB1/BCsHypqz87NQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '2d4391533a92d7b87dc1b7344e348b5d',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
