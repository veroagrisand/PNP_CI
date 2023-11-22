<?php

namespace App\Controllers;

class head extends BaseController
{
    public function index(): string
    {
        return view('head');
    }
}