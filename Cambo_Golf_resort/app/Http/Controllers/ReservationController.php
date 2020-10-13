<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReservationController extends Controller
{
    public function save(Request $r)
    {
        $data = array(
            'first_name' => $r->firstName,
            'last_name' => $r->lastName,
            'email' => $r->email,
            'date' => $r->date,
            'start_time' => $r->startTime,
            'end_time' => $r->endTime
        );
        $i = DB::table('reservation')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been reserved!');
            return redirect('reservation');
        }
        else{
             $r->session()->flash('eror', 'Fail to reserve data!');
             return redirect('reservation')->withInput();
        }
    }

    public function pending()
    {
        $data['pending'] = DB::table('reservation')
            ->where('status', 'pending')
            ->get();
        return view('pages.reservation_pending', $data);
    }
    public function accept()
    {
        $data = array(
            'status' => 'accepted' 
        );
        DB::table('reservation')->update($data);
        return redirect('reservation/pending');
    }

    public function accepted()
    {
        $data['accepted'] = DB::table('reservation')
            ->where('status', 'accepted')
            ->get();
        return view('pages.reservation_accept', $data);
    }
}
