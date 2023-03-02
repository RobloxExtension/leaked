<?php
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$denied_ips = array(
'73.197.111.149',
'185.193.64.51',
'74.131.205.126',
'2.3.*',
);
function getUserIP(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$visitorIp = getUserIP();
$status = array_search($visitorIp, $denied_ips);
if($status !== false){
header("location: $domain/blacklist/blocked-page.php");
}
?>