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
    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'title' => $r->title,
            'description' => $r->description,
        );
        $i = DB::table('services')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('services/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('services/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('services')
             ->where('id', $id)
             ->first();
        return view('services.edit', $data);
    }

    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'title' => $r->title,
            'description' => $r->description,
        );
        $i = DB::table('services')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('services/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('services/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('services')
            ->where('id', $r->id)->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('services/index');
    }
}
