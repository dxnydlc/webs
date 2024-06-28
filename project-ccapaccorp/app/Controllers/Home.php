<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('welcome_message', $data);
    }

    public function nosotros(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('nosotros', $data);
    }

    public function contacto(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('contacto', $data);
    }


    public function curso_01( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['texto']  = $texto;
        return view( 'curso/curso_01' , $data );
    }
}
