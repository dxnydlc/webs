<?php

namespace App\Controllers;

class Home extends BaseController
{
    // ........................................................
    public function index(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('welcome_message', $data);
    }
    // ........................................................
    public function nosotros(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('nosotros', $data);
    }
    // ........................................................
    public function contacto(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('contacto', $data);
    }
    // ........................................................
    public function curso_01( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        $data['texto']  = $texto;
        return view( 'curso/curso_01' , $data );
    }
    // ........................................................
    public function curso_02( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        $data['texto']  = $texto;
        return view( 'curso/curso_02' , $data );
    }
    // ........................................................
    public function tributario(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('in-company/tributario', $data);
    }
    // ........................................................
    public function laboral(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('in-company/laboral', $data);
    }
    // ........................................................
    public function contable(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
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
        $data['VERSION']  = VERSION;
        return view('seminario/tributario', $data);
    }
    // ........................................................
    public function seminario_laboral(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('seminario/laboral', $data);
    }
    // ........................................................
    public function seminario_contable(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        return view('seminario/contable', $data);
    }
    // ........................................................
    public function capatips_01( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        $data['texto']  = $texto;
        return view( 'capatips/capatips_01' , $data );
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
    public function expositor_01( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        $data['texto']  = $texto;
        return view( 'expositor/expositor_01' , $data );
    }
    // ........................................................
    public function expositor_02( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        $data['texto']  = $texto;
        return view( 'expositor/expositor_02' , $data );
    }
    // ........................................................
    public function expositor_03( $texto ): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        $data['VERSION']  = VERSION;
        $data['texto']  = $texto;
        return view( 'expositor/expositor_03' , $data );
    }
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
    // ........................................................
}
