 <?php
         $to = "leads@fortuna-group.co.uk";
         $subject = "Campaign BL000 Bridging Loan - Call Enquiry";
         
         $message = "<p><b>Name :</b> ".$_REQUEST['txtname']."</p>";
         $message .= "<p><b>Email :</b> ".$_REQUEST['txtemail']."</p>";
		 $message .= "<p><b>Number :</b> ".$_REQUEST['txtnumber']."</p>";
         
         $header = "From:".$_REQUEST['txtfrommail']." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
        // echo $message;
		// echo $header;
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "1";
         }else {
            echo "0";
         }