<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServicesController extends Controller
{
    public function index(){
        $data['services'] = DB::table('services')
            ->paginate(22);
        return view ('services.index', $data);
    } 
    public function create(){
        
        return view('services.create');
    }
}
