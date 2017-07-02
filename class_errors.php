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


   class ERRNO_EXCEPTIONS
    {  

  public $ERROR_REPORTING_0 = error_reporting(0);

  public $ERROR_REPORTING_E_ERROR_E_WARNING_E_PARSE = error_reporting(E_ERROR | E_WARNING | E_PARSE);

  public $ERROR_REPORTING_E_ERROR_E_WARNING_E_PARSE_E_NOTICE = error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

  public $ERROR_REPORTING_E_ALL_E_NOTICE = error_reporting(E_ALL & ~E_NOTICE);

  public $ERROR_REPORTING_E_ALL = error_reporting(E_ALL);

  public $ERROR_REPORTING_1 =  error_reporting(-1);

  public $ERROR_REPORTING_E_ALL_INI_SET = ini_set('error_reporting', E_ALL);

  public $ERROR_REPORTING_DISPLAY_ERRORS = ini_set("display_errors", 1);
 

    } // end of class errors


?>
