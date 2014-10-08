<?php

use Controller\FrontController;

require_once '../src/Autoloader.php';
$autoloader=new \Autoloader(null,'../src');
$autoloader->register();


$front= new FrontController();
$front->handlerAction($_GET);

