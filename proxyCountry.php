<?php
//Detection IP
function getUserIpAddr(){
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
//ip from share internet
$ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
//ip pass from proxy
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
$ip = $_SERVER['REMOTE_ADDR'];
}
return $ip;
}
//echo 'User Real IP - '.getUserIpAddr();
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://whois.as207111.net/api/lookup?ip_address='.getUserIpAddr(),
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
CURLOPT_HTTPHEADER => array(
'Content-Type: application/json',
'Authorization: Bearer 146|njoPQ4mH7omuTHsQpKCrSdLEh1IwoQMfEUVlAH5a'//API
),
));
$response = curl_exec($curl);
curl_close($curl);
$user_log = json_decode($response,true);
//var_dump($user_log);
$user_ip = $user_log['ip'];
$user_country = $user_log['country'];
$user_status = $user_log['privacy']["proxy"];
if($user_country !=='US'):
die('<h2 style="text-align:center; margin:2% auto;">You are unauthorized to access this page.</h2><hr>
<div class="row" style="text-align:center;"> <p> Its look like you are from outside of USA and trying access our system.If not, Please clean browser and try again.<Thanks.></p></div>
');
endif;
if($user_status == 1):
die('<h2 style="text-align:center; margin:2% auto;">You are unauthorized to access this page.</h2><hr>
<div class="row" style="text-align:center;"> <p><b>Your IP : </b> '.$user_ip.'<br> Its look like you are using proxy/vpn to access our system.Please disabled the proxy/vpn, clean browser and try again.<Thanks.></p></div>
');
endif;