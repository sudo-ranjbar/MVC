<?php

namespace App\Core;

use App\Utilities\Url;
use JetBrains\PhpStorm\NoReturn;

class Request
{

    private array $params;
    private mixed $method;
    private mixed $ip;
    private mixed $agent;

    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];

    }

    public function getParams($key)
    {
        return $this->params[$key] ?? null;
    }

    public function getUri(): false|string
    {
        return Url::current_route();
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getAgent()
    {
        return $this->agent;
    }

}