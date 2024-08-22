<?php
# front controller
use App\Core\Request;
use App\Core\StupidRouter;
use App\Utilities\Url;

include "bootstrap/init.php";

$request = new Request();
echo $request->getParams('name');

if($request->getParams('name') === 'ali') {
    $request->redirect('colors/red');
}
//echo "<pre>";
//var_dump($request);
//echo  "<hr>";
//echo $request->getMethod() . "<hr>";
//echo $request->getIp() . "<hr>";
//echo $request->getAgent() . "<hr>";


$router = new StupidRouter();
$router->runRoute();



