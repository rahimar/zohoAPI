<?php



function details_record(){
$api_url = "https://www.zohoapis.com/crm/v2/Leads";
$access_token = "1000.42b1a7ae79285e89480de117824c2fa8.342553440b94236e7108fb48f768597e";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Authorization: Zoho-oauthtoken ' . $access_token,
'Content-Type: application/x-www-form-urlencoded'));
$result = curl_exec($ch);
//curl_close($ch);
$post1 = json_decode($result);
echo '<pre>',print_r($post1),'</pre>';

}

details_record();
?>