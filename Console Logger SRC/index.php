<?php
header('location: /generator');
?>
<?php
$x = 300;  // 6 hours - 6*60*60
$current_time = time();
$path = './js';
 
$files = glob($path.'/*.php');
foreach($files as $file) {
 $file_creation_time = filemtime($file);
 $difference = $current_time - $file_creation_time;
  if(is_file($file)) {
    if ($difference >= $x) {
      unlink($file);
    }
  }
}
?>