<?php

$creatives = [
	'30.sec.xml',
	'30.sec2.xml',
    '30.sec3.xml',
    'get.back.xml',
    'rio.xml',
    'small.xml',
    'sugar.xml'
];

$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $creatives[$randomIndex];

header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header('Access-Control-Allow-Credentials: true');
header('Location: ' . $randomUrl, true, 303);
?>