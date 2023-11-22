<?php

namespace App\Controllers;

class registration extends BaseController
{
    public function index(): string
    {
        return view('registration');
    }
}