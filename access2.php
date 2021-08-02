<?php



function access_record2(){
$api_url = "https://accounts.zoho.com/oauth/v2/token";
 $data = array(
        'refresh_token'     => '1000.c39286a8e8fd046106e4e925c2198fb1.8f628bffc1fd2139a25337df3e922cc2',
        'client_id'        => '1000.14CB6BJVLBD6GASVWQ2F6S91CTG5IP',
        'client_secret'    => '1b86563df19e05522a04eabe06743c369a7b57f199',
        'grant_type'       => 'refresh_token',
    );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data) );
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
$result = curl_exec($ch);
//curl_close($ch);
$post1 = json_decode($result);
echo '<pre>';
   print_r($post1);
   echo '</pre>';
}

access_record2();
?>