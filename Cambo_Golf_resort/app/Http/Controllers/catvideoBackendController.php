<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catvideo;
use App\Video;
class catvideoBackendController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


        $video = new Video();
        $video->catvideo_id = $request->input('catvideo_id');

        $video->video = $request->input('video');

        $video->save();
        return redirect("catvideoBackControl/".$video->catvideo_id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $video = Catvideo::find($id);
        $catvideo = Catvideo::all();
        return view('pages.videoControl',compact('video','catvideo'));
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
            'category' => 'required',
            'category'=>'required'
        ]);
        $catvideo = Catvideo::Find($id);
       if($request->category_img===null){
            $catvideo->category = $request->input('category');
          $catvideo->category_img = $request->input('backup');
           $catvideo->save();
       }
       else{
            $catvideo->category = $request->input('category');
            if($request->hasfile('category_img')) {
                $file = $request->file('category_img');
                $name =$file->getClientOriginalName();
                $file->move('img/Category',$name);
                $catvideo->category_img = $name;
            }
         $catvideo->save();
       }
        return redirect('/catvideoctr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catvideo = Catvideo::FindOrFail($id);
        $catvideo->delete();
        return redirect('/catvideoctr');
    }
}
