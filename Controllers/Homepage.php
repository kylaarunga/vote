<?php

namespace App\Controllers;

class homepage extends BaseController
{
    public function index()
   {
        return view('homepage');
    }
}