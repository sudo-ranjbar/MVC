<?php

namespace App\Controllers;

class ArchivesController
{
    public function index(): void
    {

        view('archives.index');
    }

    public function articles(): void
    {
        view('archives.articles');
    }
}