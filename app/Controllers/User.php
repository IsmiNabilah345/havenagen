<?php

namespace App\Controllers;

use App\Models\ModelMatkul;

class User extends BaseController
{
    // protected $modelmatkul;
    // public function __construct() 
    // {
    //     $this->modelmatkul = new ModelMatkul();
    // }

    public function index()
    {
        return view('user/index');
    }

}
