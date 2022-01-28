<?php
if (isset ($_POST['sessionId']));
$sessionId=  $_POST["sessionId"];

if (isset ($_POST['serviceCode']));
$serviceCode= $_POST["serviceCode"];

if (isset ($_POST['phoneNumber']));
$PhoneNumber= $_POST["phoneNumber"];

if (isset ($_POST['text']));
$text =$_POST["text"];

if ($text==""){
    $response= "CON check for \n";
    $response .="1. My Acct No \n";
    $response .="2. My Phone No\n";
}
else if ($text=="1"){
    $response = "CON Choose account information \n";
    $response .="1. Acct No\n";
    $response .="1. Acct balance\n";
}
 else if ($text=="2"){
     $response= "END Your Phone No is".$PhoneNumber;
 }
else if($text=="1*1"){
    $accountNo="acc011";
    $response= "END your acc no is" .$accountNo;
} 
else if($text=="1*2"){
    $balance="GHC 1000";
    $response= "END your balance, is" .$balance;
} 

header('Content.type;text/plain');
echo $response;

?>

