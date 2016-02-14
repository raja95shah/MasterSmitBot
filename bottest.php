<?php

$botToken = "151353509:AAHDiSNxQZ3ctXKMyWPtlgNO5S9s3FnesEk"; //token optained from BotFather telegram
$website = "https://api.telegram.org/bot".$botToken; //to send request accordingly 

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {
	
	case "/command1":
		sendMessage($chatId, "test");
		break;
	case "/hi":
		sendMessage($chatId, "hi there!");
		break;
	default: 
		sendMessage($chatId, "default");
	
}

function sendMessage ($chatId, $message) {
	
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
	file_get_contents($url);
	
}
 




?>