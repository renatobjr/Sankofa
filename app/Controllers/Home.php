<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        // set page index
        echo view('index');
    }

    public function dashboard()
    {
        // set page dashboard 
        echo view('dashboard', $this->data);
    }
}