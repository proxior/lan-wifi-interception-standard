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


class ATTACK_DETAILS
  {
 

    public $DETAILS = array();
    
    public $CONNECTED = "successful"; 
    public $PROTOCOL_PORT = "http | 80";
    public $DNS_CONDITION = "spoofing";


    const CONSTANT = "h:i:s"; // for time to attack

    function showConstant() 
      {
        echo  self::CONSTANT;
        }
  

 

      public function __construct()
	 {
 	  $this->DETAILS[0] = $this->CONNECTED; // for connect condition
	  $this->DETAILS[1] = $this->PROTOCOL_PORT;  // for protocol and port to clone
          $this->DETAILS[2] = $this->DNS_CONDITION; // for dns spoofing
           }



 
        public function __destruct()
	 {
 	  $this->DETAILS[0] = null;
	  $this->DETAILS[1] = null;  
          $this->DETAILS[2] = null; 
          $this->DETAILS[3] = null;	  
           }





   } // end of class



?>
