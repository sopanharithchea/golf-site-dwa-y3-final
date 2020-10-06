<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Storage;
class slideController extends Controller
{

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    $slide = Slide::all();
    return view('pages.slidetable',compact('slide'));
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
    $slide = new Slide();
    $slide->maintext = $request->input('maintext');
    $slide->desc = $request->input('desc');

    if($request->hasfile('imgname')){
        $file = $request->file('imgname');
        $filename =$file->getClientOriginalName();
        $file->move('img/slideImage',$filename);
        $slide->imgname= $filename;

    }else {
        return "your need to try again";
    }
    $slide->save();
    return redirect('/slide');

}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{

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
        'maintext' => 'required',
        'desc' => 'required',

    ]);
    $slide = Slide::Find($id);
    if($request->imgname===null){
        $slide->maintext = $request->input('maintext');
        $slide->imgname = $request->input('backup');
        $slide->desc = $request->input('desc');
        $slide->save();

        }else{
        $slide->maintext = $request->input('maintext');
        $slide->desc = $request->input('desc');
        if($request->hasfile('imgname')) {
            $file = $request->file('imgname');
            $name =$file->getClientOriginalName();
            $file->move('img/slideImage/',$name);

            $slide->imgname = $name;
        }
        $slide->save();
    }
    return redirect('/slide');


}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{

    $slide = Slide::find($id);
    Slide::find($id)->delete($id);
    unlink(public_path( )."/img/slideImage/".$slide->imgname);
    return redirect('/slide');
}
}
