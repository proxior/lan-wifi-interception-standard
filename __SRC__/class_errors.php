<?php


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
