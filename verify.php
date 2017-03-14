<?php
$access_token = 'M4ikzreXaC0LRBqMqP1Pu64ncgfT2dSUH2Lht2QCiLzAqrYv5sMmXrC6FOUB6dm6DL0ML8bsLtR/Y1EvqCC5ycB8iSQvBo4z34xYcN/vqxrE1/p021/5Hs10OblHrPq2nNDaSrJcdM8N16eYnwbPjwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
