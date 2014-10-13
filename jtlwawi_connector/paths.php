<?php
/**
 * jtlwawi_connector/index.php
 * AdminLogin für jtlwawi Connector
 * 
 * Es gelten die Nutzungs- und Lizenzhinweise unter http://www.jtl-software.de/jtlwawi.php
 * 
 * @author JTL-Software <thomas@jtl-software.de>
 * @copyright 2006, JTL-Software
 * @link http://jtl-software.de/jtlwawi.php
 * @version v1.0 / 14.06.06
*/

// Set the level of error reporting
if(defined('E_DEPRECATED'))
{
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
}
else
{
    error_reporting(E_ALL & ~E_NOTICE);
}

//Pfad zum Shop Root
define('DOCROOT_PATH', '../../../../../');
