<?php
error_reporting(0);
$error = 2;
$data = $_REQUEST["data"];
$json_data = json_decode(base64_decode($data),true);
$keys_array = [];
for ($i = 0; $i < count($json_data); $i++) {

$hex = $json_data[$i]['key_id'];
$bin = hex2bin($hex);
$keyid64 = base64_encode($bin);
$finalkeyid64 = str_replace('=', '', $keyid64);

$hex2 = $json_data[$i]['key'];
$bin2 = hex2bin($hex2);
$key64 = base64_encode($bin2);
$finalkey64 = str_replace('=', '', $key64);

    $key = [
        "kty" => "oct",
        "kid" => $finalkeyid64,
        "k"   => $finalkey64
    ];
    $keys_array[] = $key;
}

$output_array = ["keys" => $keys_array,"type" => "temporary"];
$output_json = json_encode($output_array, JSON_PRETTY_PRINT);
header("Content-Type: application/json");
echo $output_json;
?>
