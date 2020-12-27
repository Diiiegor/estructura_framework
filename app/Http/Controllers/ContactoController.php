<?php


namespace App\Http\Controllers;


use App\Http\Response;

class ContactoController
{
    public function index()
    {
        return new Response('contacto');
    }

}