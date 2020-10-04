<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Storage;
class slideController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('pages.slideTable',compact('slide'));
    }
}
