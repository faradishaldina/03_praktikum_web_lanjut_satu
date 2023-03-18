<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function one()
    {
        return view ('program', ['title' => 'Bootcamp']);
    }
    public function two()
    {
        return view ('program', ['title' => 'Internship']);
    }
    public function three()
    {
        return view ('program', ['title' => 'Carreer']);
    }
}
