<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['APP_URL']    = getenv('app.baseURL');
        return view('welcome_message', $data);
    }
}
