<?php

namespace App\Controllers;

class HomeController
{

    public function index(): void
    {
        view('home.index');
    }

    public function about(): void
    {
        global $request;
        $me = $request->get_route_param('me');
        view('home.about', ['me' => $me]);
    }

}