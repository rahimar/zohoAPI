<?php



function details_record(){
$api_url = "https://inventory.zoho.com/api/v1/items?organization_id=756694709";
$access_token = "1000.760af50599c910e0d5d3b5d8c133d1a3.6bf73167f78f306ce30f2066ee419378";

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