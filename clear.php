<?php

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
