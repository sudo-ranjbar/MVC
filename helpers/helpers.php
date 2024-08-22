<?php

function site_url($route): string
{
    return $_ENV['URL_ROOT'] . $route;
}

function random_element($arr)
{
    shuffle($arr);
    return array_pop($arr);
}
