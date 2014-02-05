<?php
//
// PHASE: BOOTSTRAP
//
define('APOLLO_INSTALL_PATH', dirname(__FILE__));
define('APOLLO_SITE_PATH', APOLLO_INSTALL_PATH . '/site');

require(APOLLO_INSTALL_PATH.'/src/CApollo/bootstrap.php');

$ap = CApollo::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ap->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ap->ThemeEngineRender();

