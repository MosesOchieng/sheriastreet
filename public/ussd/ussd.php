<?php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["sessionCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Hello Dear user welcome to Sheria Street ,select options to proceed.\n";
    $response .= "1. Report a case . \n";
    $response .= "2. About Sheria Street. \n";
    $response .= "3. Change language to swahili \n";



} else if ($text == "1") {
    // Business logic for first level response
    $response  = "CON You would like to report a case ?  \n";
    $response .= "1. Yes. \n";
    $response .= "2. No. \n";
    $response .= "3. Back.";


}else if ($text == "2") {
  $response = "CON Choose options below to proceed. \n";
  $response .= "1. About Founders of Sheria Street. \n";
  $response .= "2. About Sheria Street";


}else if($text == "3"){
  $response = "CON Salamu ,Karibu katika kutumia mtandao wetu wa Sheria Street .Fanya chaguzi lako kuendelea. \n";
  $response .="1. Piga ripoti kuhusu ukatili wa kijinsia. \n";
  $response .="2. Kuhusu Sheria Street. \n";
  $response .="3. Badilisha Lugha.";


}else if($text == "1*1"){
  $response = "CON Choose current location \n";
  $response .= "1. Nairobi \n";
  $response .= "2. Mombasa. \n";
  $response .= "3. Kisumu. \n";
  $response .= "4. Nakuru.";

}else if($text == "2*1"){

  $response = "END The founders of Sheria Street are";

}else if($text == "3*1"){
  $response = "CON Piga ripoti. \n";
  $response .= "1. Ndio. \n";
  $response .= "2. La. \n";
  $response .= "3. Futa.";


}else if($text == "1*1*1"){
  $response = "CON Choose an option to proceed. \n";
  $response .= "1. Denial to work. \n";
  $response .= "2.  Harrasment during interviews. \n";
  $response .= "3. Pay and work policies Discrimination \n";
  $response .= "4. Back";

}else if($text == "1*1*1*1"){
  $response = "CON Chagua Maaeneo ya Kuishi. \n";
  $response .= "1. Nairobi \n";
  $response .= "2. Mombasa. \n";
  $response .= "3. Kisumu. \n";
  $response .= "4. Nakuru.";

}else if($text == "1*1*2"){
  $response = "CON Choose an option to proceed. \n";
  $response .= "1. Denial to work. \n";
  $response .= "2.  Harrasment during interviews. \n";
  $response .= "3. Pay and work policies Discrimination \n";
  $response .= "4. Back";

}else if($text == "1*1*1*1*1"){
  $response = "END You will receive a link that will prompt you to allow for your location.";



}else if($text == "1*1*2*1"){
  $response = "CON Chagua Maaeneo ya Kuishi. \n";
  $response .= "1. Nairobi \n";
  $response .= "2. Mombasa. \n";
  $response .= "3. Kisumu. \n";
  $response .= "4. Nakuru.";


}else if($text == "1*1*1*2*1"){
  $response = "END You will receive a link that will prompt you to allow for your location.";


}
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
