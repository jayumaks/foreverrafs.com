<?php
     if (isset($_POST['name'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
    
       $to = 'coded_raf@yahoo.com';
       $subject = 'Mail from foreverrafs.com';
       $headers = "From: ".$name." <".$email."> \r\n";
       $send_email = mail($to,$subject,$message,$headers);
        

       echo ($send_email) ? "sent" : "failed";
  }
?>