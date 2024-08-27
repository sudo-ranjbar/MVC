<?php

use App\Core\Routing\Router;

include "bootstrap/init.php";

$userModel = new \App\Models\User();
$userModel->get_name_email_pair();
$user1 = $userModel->find(1);
nice_dump($user1->id);

$names = $userModel->get_names();



$router = new Router();
try {
    $router->runRouter();
} catch (Exception $e) {

}






