<?php

namespace App\Controllers;

class Home extends BaseController
{
    // ........................................................
    public function index(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('welcome_message', $data);
    }
    // ........................................................
    public function nosotros(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('nosotros', $data);
    }
    // ........................................................
    public function contacto(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('contacto', $data);
    }
    // ........................................................
    public function curso_01( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['texto']  = $texto;
        return view( 'curso/curso_01' , $data );
    }
    // ........................................................
    public function curso_02( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['texto']  = $texto;
        return view( 'curso/curso_02' , $data );
    }
    // ........................................................
    public function tributario(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('in-company/tributario', $data);
    }
    // ........................................................
    public function laboral(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('in-company/laboral', $data);
    }
    // ........................................................
    public function contable(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('in-company/contable', $data);
    }
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    public function seminario_tributario(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('seminario/tributario', $data);
    }
    // ........................................................
    public function seminario_laboral(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('seminario/laboral', $data);
    }
    // ........................................................
    public function seminario_contable(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('seminario/contable', $data);
    }
    // ........................................................
}
