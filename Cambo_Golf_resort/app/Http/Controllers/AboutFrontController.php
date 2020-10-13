<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AboutFrontController extends Controller
{
    public function about()
    {
        $data['about'] = DB::table('about_us')
            ->where('active',1)
            ->get();
        return view('pages.about', $data);
    }
}
