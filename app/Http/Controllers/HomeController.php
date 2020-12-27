<?php


namespace App\Http\Controllers;
use App\Http\Response;

class HomeController
{
    public function index()
    {
        return new Response('home');
       // return 'Home';
    }

}