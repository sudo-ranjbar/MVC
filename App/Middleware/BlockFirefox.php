<?php

namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class BlockFirefox implements MiddlewareInterface
{
    public function handle()
    {
        global $request;

//        if (Browser::isDesktop()) {
//            echo "You are using Desktop";
//        }
        if (Browser::isChrome()) {
            echo 'You are using google chrome';
        }


    }




}