<?php
$json = file_get_contents('php://input');
$ch = curl_init("localhost:6800/jsonrpc");
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
header('Content-Type: application/json; charset=utf-8');
echo curl_exec($ch);
curl_close($ch);