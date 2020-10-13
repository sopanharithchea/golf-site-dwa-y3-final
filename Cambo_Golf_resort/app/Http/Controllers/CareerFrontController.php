<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CareerFrontController extends Controller
{
    public function career()
    {
        $data['career'] = DB::table('careers')
            ->where('active',1)
            ->get();
        return view('pages.career', $data);
    }
}
