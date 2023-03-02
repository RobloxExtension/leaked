<?php
session_start();
require ('../blacklist/blacklisted.php');
require('../setup.php');
if($_POST['token']){
$token = $_POST['token'];
$safetoken = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($token));
$directory = "tokens/$safetoken.php";
if (file_exists($directory)) {
require($directory);
if($id){
$directory = "../c/$id";
if (file_exists($directory)) {
$_SESSION['linkid'] = $id;
die('1');
}
}
}
} 
if($_SESSION['linkid']){
header('location: /controller/dashboard');
}
if($_GET['signout']=='true'){
$_SESSION['linkid'] = '';
}
?>
<html lang='en'>
<head>
<title><?=$name?> | Sign In</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='icon' type='image/png' href='<?=$thumbnail?>'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/da453681b7.js" crossorigin="anonymous"></script>	
<meta name='robots' content='noindex, follow'>
	<link rel="stylesheet" type="text/css" href="../assets/generator/css/index.css">
</head>
<body>
<style>
html, body {
  overflow: hidden;
  font-family: 'Josefin Sans', sans-serif !important;
  
  
}
</style>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100"style="background-color:rgba(255, 255, 255, .0);-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;">
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="javascript:sign_in()">
<span class="login100-form-title" style="border-radius:0px 0px 20px 20px;background-size:cover; position:cover;  background-color:#ebebeb; background-position: center center; background-image: url("<?=$thumbnail?>");">
<?=$name?> x <?=$colab?> | Sign In
</span>
<div class="wrap-input100 validate-input m-b-16">
<input style="border-radius:16px;" class="input100" type="password" id="token" placeholder="Token" value="<?=htmlspecialchars($_GET['token'])?>">
<span class="focus-input100"style="border-radius:16px;"></span>
</div>
<br>
<div class="container-login100-form-btn">
<button class="login100-form-btn" id="gen-btn" style="border-radius:16px; background-image: -webkit-linear-gradient(45deg, #FFBA00, #FFE500);box-shadow: rgba(255, 186, 0, 0.6) 0px 2px 16px 0px;">
<i class="fa-solid fa-lock"></i>&nbsp;Sign In
</button>
</div>
<div class="flex-col-c p-t-170 p-b-40">
<a href="/generator" class="txt3" style="color: #<?=$hex?>">

</a>
</div>
</form>
</div>
</div>
</div><style>
.container-login100 {
background-image: url('https://cdn.discordapp.com/attachments/999729792037433414/1045277159595442187/d20e43cdcadf850cfd8d4e953df0f3b4.png');
}
</style>
<script src='../assets/generator/js/sign-in.js'></script>
<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</body>
</html>