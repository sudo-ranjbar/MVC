<?php
# front controller
use App\Core\StupidRouter;
use App\Utilities\Url;

include "bootstrap/init.php";


echo Url::current_route() . "<hr>";


$router = new StupidRouter();
$router->runRoute();



