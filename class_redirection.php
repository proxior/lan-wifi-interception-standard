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



class REDIRECTION_URL
  {
 

    public $LOCAL_IP = array();

      public function __construct()
	 {
 	  $this->LOCAL_IP[0] = "localhost"; // fro all browsers (default host name in operating system)
	  $this->LOCAL_IP[1] = "::1";  // for chrome
          $this->LOCAL_IP[2] = "127.0.0.1"; // for mozilla
          $this->LOCAL_IP[3] = "127.0.1.1."; // for server name (in operating system)	  
           }



 
        public function __destruct()
	 {
 	  $this->LOCAL_IP[0] = null;
	  $this->LOCAL_IP[1] = null;  
          $this->LOCAL_IP[2] = null; 
          $this->LOCAL_IP[3] = null;	  
           }






   } // end of class




    

 class REDIRECTION_URL_FORCE extends REDIRECTION_URL
   {
 

    public $LOCAL_IP = array();

      public function __construct()
	 {

          parent::__construct();

 	  $this->LOCAL_IP[0] = "localhost"; 
	  $this->LOCAL_IP[1] = "::1";  
          $this->LOCAL_IP[2] = "127.0.0.1";
          $this->LOCAL_IP[3] = "127.0.1.1."; 	  
           }



      
        public function __destruct()
	 {

         parent::__destruct();

 	  $this->LOCAL_IP[0] = null;
	  $this->LOCAL_IP[1] = null;  
          $this->LOCAL_IP[2] = null; 
          $this->LOCAL_IP[3] = null;	  
           }




   } // end of class with extends

   


           
?>
