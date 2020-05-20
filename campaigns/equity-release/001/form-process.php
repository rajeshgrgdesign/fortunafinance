<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// phone
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

$EmailTo = "leads@fortuna-group.co.uk, sa@fortuna-group.co.uk";
$Subject = "Campaign ER001 Equity Release - Call Enquiry";


$message = "<p><b>Name :</b> ".ucwords($name)."</p>";
$message .= "<p><b>Phone :</b> ".$phone."</p>";


$header = "From: noreply@fortuna-finance.co.uk\r\n"; 
 $header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
// send email
$success = mail($EmailTo, $Subject, $message, $header);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>