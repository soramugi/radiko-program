<?php

error_reporting(0);
$path = $_SERVER['REQUEST_URI'];

$url = 'http://radiko.jp/v3' . $path;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$res =  curl_exec($curl);
switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
case 200:  # OK
	$obj = simplexml_load_string($res);
	break;
default:
	$obj = [
		'code' => 'error',
	];
}

curl_close($curl);

$json = json_encode($obj);

http_response_code($http_code);
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
echo $json;
