<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/main');
    }
    public function welcome()
    {
        return view('templates/main');
    }
}