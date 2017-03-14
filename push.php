<?php
$access_token = 'M4ikzreXaC0LRBqMqP1Pu64ncgfT2dSUH2Lht2QCiLzAqrYv5sMmXrC6FOUB6dm6DL0ML8bsLtR/Y1EvqCC5ycB8iSQvBo4z34xYcN/vqxrE1/p021/5Hs10OblHrPq2nNDaSrJcdM8N16eYnwbPjwdB04t89/1O/w1cDnyilFU=';
$content = $_POST['zbxreport'];
$to = 'C4525be31a312a6a0a25d7c0c340315d8';
$url = 'https://api.line.me/v2/bot/message/push';
$messages = [
	'type' => 'text',
	'text' => $content
	];
$data = [
	'to' => $to,
	'messages' => [$messages],
	];
$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result . "\r\n";
echo "OK";
