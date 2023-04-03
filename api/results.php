<?php
// disable error
error_reporting(0);
$error = 2;

// Encode Key ID
$hex = $_GET["keyid"];            // and much more hex values as string as in your example
$bin = hex2bin($hex);       // convert the hex values to binary data stored as a PHP string
$keyid64 = base64_encode($bin); // remove == , replace as space
$finalkeyid64 = str_replace('=', '', $keyid64);


// validation
if (empty($finalkeyid64)){

    // return 503 & JSON
   http_response_code(503);
header("Content-Type: application/json");
$errorjson = array("Status"=>"503","Content"=>"Validation Failed!","Reason"=>"Did not provide Key ID | Key or Key ID | Key isn't complete.");
echo json_encode($errorjson);
$error = 1;
   
   exit;
}

// Encode Key
$hex2 = $_GET["key"];            // and much more hex values as string as in your example
$bin2 = hex2bin($hex2);       // convert the hex values to binary data stored as a PHP string
$key64 = base64_encode($bin2); // remove == , replace as space
$finalkey64 = str_replace('=', '', $key64);

// validation

if (empty($finalkey64)){
  if ($error !== 1){
     // return 503 & JSON
   http_response_code(503);
   header("Content-Type: application/json");
   $errorjson = array("Status"=>"503","Content"=>"Validation Failed!","Reason"=>"Did not provide Key ID | Key or Key ID | Key isn't complete.");
   echo json_encode($errorjson);
   
      
      exit;
  }
}

/*
// create JSON for keys 
$keys[] = array("kty"=>"oct","k"=>$finalkey64,"kid"=>$finalkeyid64);

// encode JSON
$license = array("keys"=>$keys,"type"=>"temporary");

// output JSON
header("Content-Type: application/json");
echo json_encode($license);
*/
?>


{  
    "keys":[  
       {  
          "kty":"oct",
          "k":"<?php echo $finalkey64;?>",
          "kid":"<?php echo $finalkeyid64;?>"
       }
    ],
    "type":"temporary"
 }
 


