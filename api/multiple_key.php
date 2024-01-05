<?php
/* error_reporting(0);
$error = 2; */
$data = $_REQUEST["data"];
echo base64_decode($data);
$json_data = json_decode(base64_decode($data),true);
$keys_array = [];
for ($i = 0; $i < count($json_data); $i++) {

$bin = hex2bin($json_data[$i][key_id]);
$keyid64 = base64_encode($bin);
$finalkeyid64 = str_replace('=', '', $keyid64);

$bin2 = hex2bin($json_data[$i][key]);
$key64 = base64_encode($bin2);
$finalkey64 = str_replace('=', '', $key64);

    $key = [
        "kty" => "oct",
        "kid" => $finalkeyid64,
        "k"   => $finalkey64
    ];
    $keys_array[] = $key;
}

$output_array = ["keys" => $keys_array];
$output_json = json_encode($output_array, JSON_PRETTY_PRINT);
header("Content-Type: application/json");
echo $output_json;
?>
