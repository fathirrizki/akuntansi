<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function register(): string //SESUAI PLAYLIST HANYA UNTUK TESTING
    { //SESUAI PLAYLIST HANYA UNTUK TESTING
        return view('auth/register'); //SESUAI PLAYLIST HANYA UNTUK TESTING
    } //SESUAI PLAYLIST HANYA UNTUK TESTING

    public function user(): string //SESUAI PLAYLIST HANYA UNTUK TESTING
    { //SESUAI PLAYLIST HANYA UNTUK TESTING
        return view('user/index'); //SESUAI PLAYLIST HANYA UNTUK TESTING
    } //SESUAI PLAYLIST HANYA UNTUK TESTING
}
