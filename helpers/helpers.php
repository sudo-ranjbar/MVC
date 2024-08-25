<?php

use JetBrains\PhpStorm\NoReturn;

function site_url($route): string
{
    return $_ENV['URL_ROOT'] . $route;
}

#[NoReturn] function redirect($route): void
{
    header("Location: " . site_url($route));
    die();
}

function view($path, $data=[]): void
{
    extract($data);

    $path = str_replace('.', '/', $path);
    include BASE_PATH . '/views/' . $path . '.php';
}
