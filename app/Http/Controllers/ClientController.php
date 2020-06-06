<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function export()
    {
        return view('export');
    }

    public function sno_likage()
    {
        return view('sno_likage');
    }

    public function sno_quality()
    {
        return view('sno_quality');
    }


    

    
}
