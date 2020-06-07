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


    public function sno_mineral()
    {
        return view('sno_mineral');
    }


    public function sno_limoni()
    {
        return view('sno_limoni');
    }

    public function kobi_likage()
    {
        return view('kobi_likage');
    }


    
    
    
    

    
}
