<?php
$ch = curl_init();

$url = 'http://icanhazip.com/';

curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

echo $result;

var_dump($result);
