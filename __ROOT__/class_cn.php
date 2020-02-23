<?php


  class data
    {
    public $connect = array();

    public function __construct()
        {
         $this->connect[0]="localhost";
         $this->connect[1]="proxior@dns";
         $this->connect[2]="proxior@dns";
         $this->connect[3]="proxior";
           }


   public function __destruct()
        {
         $this->connect[0]=null;
         $this->connect[1]=null;
         $this->connect[2]=null;
         $this->connect[3]=null;
           }


      } // end of coonect class
  


   class security extends data
       { 
        public $connect = array();

        public function __construct()
           {
          $this->connect[0]="localhost";
          $this->connect[1]="proxior@dns";
          $this->connect[2]="proxior@dns";
          $this->connect[3]="proxior";
         } // end of class extends of connect with parent and child


       public function __destruct()
        {
         $this->connect[0]=null;
         $this->connect[1]=null;
         $this->connect[2]=null;
         $this->connect[3]=null;
           }


    }       
 
 
?>
