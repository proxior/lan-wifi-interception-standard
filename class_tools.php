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


    class INPUT_DATA
    { 
    
      public function SAFE_DATA_ENTER($data)
        {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = stripslashes($data);  
        $data = stripcslashes ($data);

          if ($data == true)
           {
          return ($data);
            }          

          else
            {
            return (!$data) .trigger_error("Data was not be send safe");
             }

         } 
    
      } // end fo class INPUT_DATA
      
      







  class INPUT_DATA_AVAILABLE extends INPUT_DATA
    { 
    
      public function SAFE_DATA_ENTER($data)
        {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = stripslashes($data);  
        $data = stripcslashes ($data);

          if ($data == true)
           {
          return ($data);
            }          

          else
            {
            return (!$data) .trigger_error("Data was not be send safe");
             }

         } 
    
      } // end fo class INPUT_DATA_AVAILABLE
      






   // clone class index file for delete

  class CLEAR_DATA_INDEX
     {
 
    static $data_indexes = "/var/www/clonenew/index.htmh";
    public $data_index;

    public function __construct() 
     {
        $this->data_index = ++self::$data_indexes;
      }

     public function __clone() 
       {
        $this->data_index = ++self::$data_indexes;
        }


    }



  class CLEAR_DATA_INDEX_C
     {

     public $data_index_c;
     public $data_index_c2;

     public function __clone()
          {
     
          $this->data_index_c = clone $this->data_index_c;
          }
 
       }
 
  

  $obj_data = new  CLEAR_DATA_INDEX_C();

  $obj_data -> data_index_c = new CLEAR_DATA_INDEX();
  $obj_data -> data_index_c2 = new CLEAR_DATA_INDEX();


    $obj_data2 = clone $obj_data;










// clone class pc file for delete

  class CLEAR_DATA_PC
     {
 
    static $data_pcs = "/var/www/clonenew/pc.htmh";
    public $data_pc;

    public function __construct() 
     {
        $this->data_pc = ++self::$data_pcs;
      }

     public function __clone() 
       {
        $this->data_pc = ++self::$data_pcs;
        }


    }



  class CLEAR_DATA_PC_C
     {

     public $data_pc_c;
     public $data_pc_c2;

     public function __clone()
          {
     
          $this->data_pc_c = clone $this->data_pc_c;
          }
 
       }
 
  

  $obj_data_pc = new  CLEAR_DATA_PC_C();

  $obj_data_pc -> data_pc_c = new CLEAR_DATA_PC();
  $obj_data_pc -> data_pc_c2 = new CLEAR_DATA_PC();


    $obj_data_pc2 = clone $obj_data_pc;











// clone class mobile file for delete

  class CLEAR_DATA_MOBILE
     {
 
    static $data_mobiles = "/var/www/clonenew/mobile.htmh";
    public $data_mobile;

    public function __construct() 
     {
        $this->data_mobile = ++self::$data_mobiles;
      }

     public function __clone() 
       {
        $this->data_mobile = ++self::$data_mobiles;
        }


    }



  class CLEAR_DATA_MOBILE_C
     {

     public $data_mobile_c;
     public $data_mobile_c2;

     public function __clone()
          {
     
          $this->data_mobile_c = clone $this->data_mobile_c;
          }
 
       }
 
  

  $obj_data_mobile = new  CLEAR_DATA_MOBILE_C();

  $obj_data_mobile -> data_mobile_c = new CLEAR_DATA_MOBILE();
  $obj_data_mobile -> data_mobile_c2 = new CLEAR_DATA_MOBILE();


    $obj_data_mobile2 = clone $obj_data_mobile;











    
   // clone class post file fore delete

 
   class CLEAR_DATA_POST
     {
 
    static $data_posts = "/var/www/clonenew/post.phl";
    public $data_post;

    public function __construct() 
     {
        $this->data_post = ++self::$data_posts;
      }

     public function __clone() 
       {
        $this->data_post = ++self::$data_posts;
        }


    }



  class CLEAR_DATA_POST_C
     {

     public $data_post_c;
     public $data_post_c2;

     public function __clone()
          {
     
          $this->data_post_c = clone $this->data_post_c;
          }
 
       }
 
  

  $obj_data_p = new  CLEAR_DATA_POST_C();

  $obj_data_p -> data_post_c = new CLEAR_DATA_POST();
  $obj_data_p -> data_post_c2 = new CLEAR_DATA_POST();


    $obj_data_p2 = clone $obj_data_p;



    
 

 // clone class txt file for delete

   class CLEAR_DATA_TXT
     {
 
    static $data_txts = "/var/www/clonenew/export/data.txp";
    public $data_txt;

    public function __construct() 
     {
        $this->data_txt = ++self::$data_txts;
      }

     public function __clone() 
       {
        $this->data_txt = ++self::$data_txts;
        }


    }



  class CLEAR_DATA_TXT_C
     {

     public $data_txt_c;
     public $data_txt_c2;

     public function __clone()
          {
     
          $this->data_txt_c = clone $this->data_txt_c;
          }
 
       }
 
  

  $obj_data_t = new  CLEAR_DATA_TXT_C();

  $obj_data_t -> data_txt_c = new CLEAR_DATA_TXT();
  $obj_data_t -> data_txt_c2 = new CLEAR_DATA_TXT();


    $obj_data_t2 = clone $obj_data_t;









  


  
 // clone class win.bat file for delete

   class CLEAR_DATA_BAT
     {
 
    static $data_bats = "/var/www/clonenew/export/l_win.bap";
    public $data_bat;

    public function __construct() 
     {
        $this->data_bat = ++self::$data_bats;
      }

     public function __clone() 
       {
        $this->data_bat = ++self::$data_bats;
        }


    }



  class CLEAR_DATA_BAT_C
     {

     public $data_bat_c;
     public $data_bat_c2;

     public function __clone()
          {
     
          $this->data_bat_c = clone $this->data_bat_c;
          }
 
       }
 
  

  $obj_data_b = new  CLEAR_DATA_BAT_C();

  $obj_data_b -> data_bat_c = new CLEAR_DATA_BAT();
  $obj_data_b -> data_bat_c2 = new CLEAR_DATA_BAT();


    $obj_data_b2 = clone $obj_data_b;






?>
