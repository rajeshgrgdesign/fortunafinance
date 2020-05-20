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

$EmailTo = "leads@fortuna-group.co.uk";
$Subject = "Speak to Ben Enquiry";

// prepare email body text
$Body = "";
$Body .= "Name: " . ucwords($name);
$Body .= "\n";
$Body .= "Phone: ". $phone;
$Body .= "\n";

$header = "From: noreply@fortuna-finance.co.uk\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$header.= "X-Priority: 1\r\n";
// send email
$success = mail($EmailTo, $Subject, $Body, $header);

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