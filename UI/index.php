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

 session_start();

?>


<html>
<head>


<meta charset="utf-8">

 <title> DNS::UI </title>

     <link rel="icon" type="image/jpg" href="css/icons/dns2.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="css/index.css"> 
 


</head>



<body>


 <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12">

      <img src="/css/icons/dns2.png" class="img-responsive" height="280px;" width="280px;">
      <div class="row">
        <h3 class="text-center" style="padding-right: 80px;"> PROXIOR DNS::UI </h3>
      </div>
 
      <br>

      <div class="row">

         <div class="input-group col-xs-9 col-sm-9 col-md-9">

           <form action="" method="post">

             <input type="text" placeholder="Username" name="username" class="form-control"> <br><br>

            <input type="password" placeholder="Password" name="password" class="form-control"> <br><br>

          <div class="input-group-btn">
            <button class="btn btn-md btn-default btn-block" name="submit"> DNS:UI &nbsp;
               <span class="glyphicon glyphicon-arrow-right"></span>
           </button>
          </div>

          </div>

      </div>
  </div>





</body>
</html>


<?php
 
if(isset($_POST['submit']))
  {
  
  $user = "proxior@dns"; 
  $pass = "proxior@dns";

  $username = $_POST['username'];
  $password = $_POST['password'];

   if($username == $user && $password == $pass)
      {
         $_SESSION['login']="dns::ui";
        header('Location: ui.php');
        }

     else
      {
       echo '<script type="text/javascript">alert("Sign in DNS::Data error");
         </script>';
       }

     } // kleisimo ths isset

?>
