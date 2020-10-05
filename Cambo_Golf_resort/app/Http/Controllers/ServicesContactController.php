<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServicesContactController extends Controller
{
    public function index(){
        $data['services_contact'] = DB::table('services_contact')
            ->paginate(22);
        return view ('services_contact.index', $data);
    } 
    public function create(){
        return view('services_contact.create');
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'phone' => $r->phone,
            'email' => $r->email,
            'description' => $r->description,
        );
        $i = DB::table('services_contact')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('services_contact/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('services_contact/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('services_contact')
             ->where('id', $id)
             ->first();
        return view('services_contact.edit', $data);
    }

    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'phone' => $r->phone,
            'email' => $r->email,
            'description' => $r->description,
        );
        $i = DB::table('services_contact')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('services_contact/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('services_contact   /edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('services_contact')
            ->where('id', $r->id)->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('services_contact/index');
    }
}
