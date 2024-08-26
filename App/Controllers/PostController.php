<?php

namespace App\Controllers;

class PostController
{

    public function single(): void
    {
        global $request;

        $slug = $request->get_route_param('slug');
        echo $slug;

    }

    public function all(): void
    {
        global $request;

        echo 'all posts';
    }

    public function comments(): void
    {
        global $request;


        $cid = $request->get_route_param('cid');
        echo $cid;
    }
}