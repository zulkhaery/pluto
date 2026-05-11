<?php

namespace App\Controllers;


class IndexController
{
    public function index()
    {
          $data = [
            'title' => 'Welcome to Pluto',
            'version' => '1.0.0',
            'phpVersion' => PHP_VERSION,
            'serverTime' => date('Y-m-d H:i:s'),
        ];
        return view('welcome', $data);
    }
}