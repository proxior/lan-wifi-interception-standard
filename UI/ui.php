<?php

session_start();

 if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> DNS:: Data </title>

     <link rel="icon" type="image/jpg" href="css/icons/dns2.png" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <link rel="stylesheet" href="css/ui.css">

</head>

<body>


<?php

     echo "<div align='center' style='width:100%; background-color:#006666;'> 
               
                   <br>

              <img src='css/icons/dns2.png' height='50' width='100'>
             

               <br>

             <a style='color: white; font-size:25px;' href='/clear.php'> Clear </a>
                   &nbsp; &nbsp; &nbsp; 
             <a style='color: white; font-size:25px;' href='logout.php'> Logout </a> 
          </div>";

    $handle = fopen("/var/www/proxior/export/data.txt", "r");

      $counter = 0;

      if ($handle) 
         {

        while (($line = fgets($handle)) !== false) 
         {

          $counter++;


     echo "<div class='outersec'>
           <div class='left-col'>
            <div class='inner'>

            <div class='header-div' style='word-wrap: break-word'>
              <p class='heading sc-sp-data-dis'>  $line </p>
            <div class='data'>
                       
                    </div>
                </div>

              
            </div>
        </div>


        <div class='right-col'>
            <div class='inner'>
                <ul>
                    <li>
                        <a href='' class='sc-sp-list'> DNS:: $counter </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>";


   }


  fclose($handle); 
        } 



?>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>


</body>

</html>
