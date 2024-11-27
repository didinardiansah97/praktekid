<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('sambutan');
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function contact()
    {
        return view('contact');
    }

    public function project()
    {
        return view('project');
    }

    public function resume()
    {
        return view('resume');
    }

    public function form()
    {
        return view('form');
    }

    // public function data()
    // {
    //     return view('data');
    // }
}
