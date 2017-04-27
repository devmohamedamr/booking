<?php
//root
define('ROOT',dirname(__FILE__));
define('DESIGN',ROOT.'/Design');
define('FRONT',DESIGN.'/front');
define('BACK',DESIGN.'/back');
define('ADMIN',ROOT.'/admin');
define('LIB',ROOT.'/lib');
//REQUIRE FILES
require LIB.'/rb.php';
require LIB.'/Validation.php';
require LIB.'/function.php';
require LIB.'/upload.class.php';
require LIB.'/users.php';
require LIB.'/translate/translate.php';
//CONNECT WITH DB
R::setup( 'mysql:host=localhost;dbname=event', 'root', '' );