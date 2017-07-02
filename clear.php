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


  require_once('class_tools.php');


  if (class_exists('CLEAR_DATA_INDEX')) 
    {
     $obj_index = new CLEAR_DATA_INDEX;

 
  unlink($obj_index->data_index);
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





  clearstatcache(); 

  $url_redirection = shell_exec('shell/./my_ipv4.sh');

  echo "<meta http-equiv='refresh' content= '5;URL=http://$url_redirection'/>";


?>
