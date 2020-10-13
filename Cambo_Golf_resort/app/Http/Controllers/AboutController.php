<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About_Us;
use DB;
class AboutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About_Us::all();
        return view('pages.about_admin',compact('about'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About_Us();
        $about->name = $request->input('name');
        $about->position = $request->input('position');
        $about->description = $request->input('description');
    
        $about->save();
        return redirect('/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required'
        ]);

        $about = About_Us::Find($id);
            $about->name = $request->input('name');
            $about->position = $request->input('position');
            $about->description = $request->input('description');
            $about->save();
        return redirect('/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About_Us::find($id);
        About_Us::find($id)->delete($id);
        return redirect('/about');
    }
}
