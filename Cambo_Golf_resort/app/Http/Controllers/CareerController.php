<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Career;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = Career::all();
        return view('pages.career_admin',compact('career'));
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
        $career = new Career();
        $career->sector = $request->input('sector');
        $career->position = $request->input('position');
        $career->open_post = $request->input('open_post');
        $career->location = $request->input('location');
        $career->deadline = $request->input('deadline');
        $career->description = $request->input('description');
    
        $career->save();
        return redirect('/career');
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
            'sector' => 'required',
            'position' => 'required',
            'open_psot' => 'required',
            'location' => 'required',
            'deadline' => 'required',
            'description' => 'required',
        ]);

        $career = Career::Find($id);
            $career->sector = $request->input('sector');
            $career->position = $request->input('position');
            $career->open_post = $request->input('open_post');
            $career->location = $request->input('location');
            $career->deadline = $request->input('deadline');
            $career->description = $request->input('description');
            $career->save();
        return redirect('/career');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        Career::find($id)->delete($id);
        return redirect('/career');
    }
}
