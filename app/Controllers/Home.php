<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function register(): string //SESUAI PLAYLIST
    { //SESUAI PLAYLIST
        return view('auth/register'); //SESUAI PLAYLIST
    } //SESUAI PLAYLIST
}
