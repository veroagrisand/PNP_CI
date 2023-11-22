<?php

namespace App\Controllers;

class forum extends BaseController
{
    public function index(): string
    {
        return view('forum');
    }
}