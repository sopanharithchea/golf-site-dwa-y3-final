<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slide = Slide::all();
        return view('home', compact('slide'));
    }
}
