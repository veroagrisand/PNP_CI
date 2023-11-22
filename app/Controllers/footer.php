<?php

namespace App\Controllers;

class footer extends BaseController
{
    public function index(): string
    {
        return view('footer');
    }
}