<!-- <?php

	// ini_set('display_errors', 1);
 //    ini_set('display_startup_errors', 1);
 //    error_reporting(E_ALL);
 //  $str = 's5vrkwzc-w584-hwfq:63p7-c4nvtwr9gia4';
 //  $baseAuth =  base64_encode($str);
 // // header("Authorization: Basic $baseAuth");
// $url = "https://api.printful.com/store/products/226451556";
//header("WWW-Authenticate: Basic '$baseAuth'");
// $headers = array(
//     'Content-type: application/json',
//     'Acess-Control-Allow-Methods: GET',
//     'WWW-Authorization:  Basic'.$baseAuth,
// );
//   $ch = curl_init();
// // Will return the response, if false it print the response
//  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// // Set the url
// curl_setopt($ch, CURLOPT_URL,$url);
// // Execute
// $result = curl_exec($ch);
// // Closing
// curl_close($ch);

// //var_dump(json_decode($result, true));

// print_r($result);


	?> -->
<!-- <?php
// $str = 's5vrkwzc-w584-hwfq:63p7-c4nvtwr9gia4';
// $incode_val =  base64_encode($str);
//   $header = header('WWW-Authenticate: Basic realm="$incode_val$header = "');
//   $handle = curl_init();
 
// $url = "https://api.printful.com/store/products/226451556";
 
// Set the url
// curl_setopt($handle, "POST", $url);
// curl_setopt($handle, "POST", $headers);
// // Set the result output to be a string.
// curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
// $output = curl_exec($handle);
 
// curl_close($handle);
 
// echo $output;
?>

 -->
<?php
$url = "https://api.printful.com/store/products/226451556";
//$data = http_build_query($array_data);
$str = 'xxxxxxxxxxxxxxxxxxxxxxxx';
   $baseAuth =  base64_encode($str);
$header = array(
			"Authorization: Basic $baseAuth",
				);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
curl_setopt($ch, CURLOPT_HEADER, 0);
$output = curl_exec($ch);
 
 curl_close($ch);
 
 echo $output;
 




?>