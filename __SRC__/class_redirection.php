<?php


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
