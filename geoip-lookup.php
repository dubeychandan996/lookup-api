<?php
$ip='8.8.8.8'; // IP address that you want to trace
$api_key='your apikey';  // you will found in proweblook dashboard in the top nav bar
$url='https://ipgeo.proweblook.com/?ip='.$email.'&api_key='.$api_key;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
