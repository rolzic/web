<?php
/**
  * Created by PhpStorm
  * User: roland.reinvald
  * Date: 12.04.2017
  * Time: 12:18
  */

// framework configuration
// create and template object

define('CLASSES_DIR', 'classes/'); // classes path
define('TMPL_DIR', 'tmpl/'); // templates path
define('STYLE_DIR', 'css/'); // styles path
define('ACTS_DIR', 'acts/'); // acts path
define('LIB_DIR', 'lib/'); // lib path



define('DEFAULT_ACT', 'default'); //vaikimisi tegevuste faili nime muutmine
require_once 'db_conf.php'; //andmebaasi konfi sisse lugemine

define('DEFAULT_LANG', 'et'); //vaikekuva keel
//Failide kasutuselevõtt
require_once LIB_DIR.'utils.php';
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
require_once CLASSES_DIR.'mysql.php';
$http = new linkobject();
$db = new mysql(DB_HOST,DB_USER, DB_PASS, DB_NAME);
echo $http->getlink(array('kasutaja'=>'nimi','pass'=>'parool'));
echo '<pre>';
print_r($db);
echo '<pre>';
?>
 ?>
