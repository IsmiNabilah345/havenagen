<?php

namespace App\Controllers;

use App\Models\ModelMatkul;

class Home extends BaseController
{
    protected $modelmatkul;
    public function __construct() 
    {
        $this->modelmatkul = new ModelMatkul();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function landing()
    {
        return view('tampilan/landing');
    }

    public function minuman()
    {
        return view('tampilan/minuman');
    }

    public function makanan()
    {
        return view('tampilan/makanan');
    }

    public function hubungikami()
    {
        return view('tampilan/hubungikami');
    }

    public function cemilan()
    {
        return view('tampilan/cemilan');
    }
}
