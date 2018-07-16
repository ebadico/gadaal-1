<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('api');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {          
            //dd(Request()->all());

            $surveys=survey::orderBy('id', 'desc')->get();
            return view('home', compact('surveys'));
       // return view('home');
    }

   
}
