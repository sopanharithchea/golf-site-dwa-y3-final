<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServicesCategoryController extends Controller
{
    public function index(){
        $data['services_category'] = DB::table('services_category')
            ->paginate(22);
        return view ('services_categories.index', $data);
    } 
    public function create(){
        
        return view('services_categories.create');
    }
    
    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'title' => $r->title,
            
        );
        $i = DB::table('services_category')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('services_category/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('services_category/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('services_category')
             ->where('id', $id)
             ->first();
        return view('services_categories.edit', $data);
    }
    
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'title' => $r->title,
           
        );
        $i = DB::table('services_category')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('services_category/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('services_category/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('services_category')
            ->where('id', $r->id)->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('services_category/index');
    }
    
}
