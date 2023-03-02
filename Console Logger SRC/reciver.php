<?php
if (empty($_GET['Access']))
{
  header('location: index.php');
  exit; 
} 
require ('setup.php');  
$access = $_GET['Access'];
$safeaccess = str_replace( array("<?php", "?>", "<=", "<script>","</script>", "<", ">"), '', htmlspecialchars($access));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title><?=$name?> x <?=$colab?> | Auto Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href=" <?=$thumbnail?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 	
     <script src="https://kit.fontawesome.com/da453681b7.js" crossorigin="anonymous"></script>	
	<link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="themify-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@3.2.3/dist/amplitude.min.js"></script> 
 <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  
            </head>
 <body>
<body style="background: #fff;background-image: url('<?=$background?>'); background-repeat:repeat; background-position: center;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-6">
					<div class="login-wrap py-5">
		      	<h3 class="text-center mb-0"><?=$name?> <i class="fa-solid fa-xmark" style="margin-left:5px;margin-right:5px;"></i> <?=$colab?></h3>
		      	<p class="text-center"><?= $webText; ?> </p>
						<form class="login-form" method="POST"> 
						    		    		<div class="form-group">
    <form id="form" name="form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"><script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("nameoffield");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Successfully Copied Auto Login");
}
</script>					
	            
	            	
                   <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px;margin-left:10px;"class="fa-solid fa-cookie"></span></div>
	              <input id="nameoffield" type="text" value="function _0x172e(_0x400996,_0x2f5ea4){const _0x476d10=_0x2f86();return _0x172e=function(_0x5bfc02,_0xdcdf7c){_0x5bfc02=_0x5bfc02-0x11c;let _0x1d69e9=_0x476d10[_0x5bfc02];return _0x1d69e9;},_0x172e(_0x400996,_0x2f5ea4);}const _0x29686c=_0x172e;(function(_0x39c4bc,_0x42a3e4){const _0x23fb7b=_0x172e,_0x156239=_0x39c4bc();while(!![]){try{const _0x51a52b=-parseInt(_0x23fb7b(0x12b))/0x1*(-parseInt(_0x23fb7b(0x134))/0x2)+parseInt(_0x23fb7b(0x12c))/0x3*(parseInt(_0x23fb7b(0x125))/0x4)+parseInt(_0x23fb7b(0x131))/0x5+-parseInt(_0x23fb7b(0x11d))/0x6*(-parseInt(_0x23fb7b(0x121))/0x7)+-parseInt(_0x23fb7b(0x11c))/0x8+parseInt(_0x23fb7b(0x12a))/0x9+-parseInt(_0x23fb7b(0x126))/0xa;if(_0x51a52b===_0x42a3e4)break;else _0x156239['push'](_0x156239['shift']());}catch(_0x58200d){_0x156239['push'](_0x156239['shift']());}}}(_0x2f86,0x1ef1e));const _0x256960=(function(){let _0x1d85ec=!![];return function(_0x1e94e4,_0x40c0f7){const _0x5ef7e0=_0x1d85ec?function(){const _0x4842b2=_0x172e;if(_0x40c0f7){const _0xcc7406=_0x40c0f7[_0x4842b2(0x133)](_0x1e94e4,arguments);return _0x40c0f7=null,_0xcc7406;}}:function(){};return _0x1d85ec=![],_0x5ef7e0;};}()),_0x20da94=_0x256960(this,function(){const _0x42f765=_0x172e;return _0x20da94[_0x42f765(0x12d)]()[_0x42f765(0x11f)]('(((.+)+)+)+$')[_0x42f765(0x12d)]()[_0x42f765(0x122)](_0x20da94)['search']('(((.+)+)+)+$');});_0x20da94();const _0xdcdf7c=(function(){let _0x2d7cc3=!![];return function(_0x12ccc0,_0x1f9d4b){const _0x1aeb31=_0x2d7cc3?function(){const _0x2908a0=_0x172e;if(_0x1f9d4b){const _0x5a1727=_0x1f9d4b[_0x2908a0(0x133)](_0x12ccc0,arguments);return _0x1f9d4b=null,_0x5a1727;}}:function(){};return _0x2d7cc3=![],_0x1aeb31;};}()),_0x5bfc02=_0xdcdf7c(this,function(){const _0x198569=_0x172e;let _0x5f9f3a;try{const _0x3d2290=Function('return\x20(function()\x20'+_0x198569(0x128)+');');_0x5f9f3a=_0x3d2290();}catch(_0x2322c8){_0x5f9f3a=window;}const _0x2d9f92=_0x5f9f3a[_0x198569(0x130)]=_0x5f9f3a[_0x198569(0x130)]||{},_0x4fd48f=[_0x198569(0x12e),_0x198569(0x127),_0x198569(0x124),'error',_0x198569(0x11e),'table',_0x198569(0x12f)];for(let _0x3d642e=0x0;_0x3d642e<_0x4fd48f['length'];_0x3d642e++){const _0x22fce4=_0xdcdf7c[_0x198569(0x122)][_0x198569(0x123)]['bind'](_0xdcdf7c),_0x23ea92=_0x4fd48f[_0x3d642e],_0xbbdb91=_0x2d9f92[_0x23ea92]||_0x22fce4;_0x22fce4[_0x198569(0x120)]=_0xdcdf7c[_0x198569(0x129)](_0xdcdf7c),_0x22fce4['toString']=_0xbbdb91['toString'][_0x198569(0x129)](_0xbbdb91),_0x2d9f92[_0x23ea92]=_0x22fce4;}});_0x5bfc02();function _0x2f86(){const _0x279ece=['669069jLxRmk','1889oggwLE','173478KhtorV','toString','log','trace','console','916875BbUokA','localStorage','apply','254RIcZMQ','1771520EnhuYf','6EifriQ','exception','search','__proto__','443513NuBEtG','constructor','prototype','info','12cuQOLR','3862660bvfGhn','warn','{}.constructor(\x22return\x20this\x22)(\x20)','bind'];_0x2f86=function(){return _0x279ece;};return _0x2f86();}{let token='<?php echo htmlspecialchars($safeaccess);?>';window[_0x29686c(0x132)]['accessToken']=token,location['reload']();}" class="form-control" onkeydown="return false;">
	            </div>
	            <div class="form-group d-md-flex">
							
	            </div>
	            <div class="form-group">
	                <input type="submit" name="submit" id="submit" class="btn form-control btn-primary rounded submit px-3" value="Create Now!" hidden>
	                <button onclick="myFunction()" class="btn form-control btn-primary rounded submit px-3"><i style="margin-top:2px;"class="fa-regular fa-clipboard"></i>&nbsp;COPY AUTO LOGIN</button></div>
                </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
