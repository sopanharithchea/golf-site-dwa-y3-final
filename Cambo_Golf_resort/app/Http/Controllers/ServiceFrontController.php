<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServiceFrontController extends Controller
{
    public function service()
    {
        $data['services'] = DB::table('services')
            ->where('active',1)
            ->get();
        $data['service_category'] = DB::table('services_category')
            ->where('active',1)
            ->get();
        $data['service_contact'] = DB::table('services_contact')
            ->where('active',1)
            ->get();
    return view('pages.service', $data);
    }
}
