<?php

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
 session_unset();
 session_destroy();
   


  require_once('__SRC__/class_tools.php');


  if (class_exists('CLEAR_DATA_INDEX')) 
    {
     $obj_index = new CLEAR_DATA_INDEX;
 
     unlink($obj_index->data_index);

     }
 



  if (class_exists('CLEAR_DATA_PC')) 
    {
     $obj_index = new CLEAR_DATA_PC;
 
     unlink($obj_index->data_pc);

     }
 



  if (class_exists('CLEAR_DATA_MOBILE')) 
    {
     $obj_index = new CLEAR_DATA_MOBILE;
 
     unlink($obj_index->data_mobile);

     }
 

  

  if (class_exists('CLEAR_DATA_POST')) 
    {

    $obj_post = new CLEAR_DATA_POST();

    unlink($obj_post->data_post);
   
   }



   
    if (class_exists('CLEAR_DATA_TXT')) 
    {

     $obj_txt = new CLEAR_DATA_TXT();

     unlink($obj_txt -> data_txt);
    
     }





   if (class_exists('CLEAR_DATA_BAT')) 
    {

     $obj_bat = new CLEAR_DATA_BAT();

     unlink($obj_bat -> data_bat);
    
     }




   clearstatcache(); 

   opcache_reset();

   shell_exec('shell/./apache_restart.sh');

  $url_redirection = shell_exec('shell/./my_ipv4.sh');

  echo "<meta http-equiv='refresh' content= '2;URL=http://$url_redirection?clear'/>";



?>
