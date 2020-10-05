<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Image;
class categoryBackendController extends Controller
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


        $image = new Image();
        $image->category_id = $request->input('category_id');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename =$file->getClientOriginalName();
            $file->move('img/Gallery',$filename);
            $image->image= $filename;

        }else {
            $image->category_id = 'folder.jpg';
        }

        $image->save();
        return redirect("categoryBackControl/".$image->category_id );
    }

    // can you test only this one
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Category::find($id);
        $category = Category::all();
        return view('pages.imageControl',compact('image','category'));
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
            'category_img' => 'required',
        ]);
        $category = Category::Find($id);


        if($request->category_img===null){
            $category->category = $request->input('category');
          $category->category_img = $request->input('backup');
           $category->save();
       }
       else{
            $category->category = $request->input('category');
            if($request->hasfile('category_img')) {
                $file = $request->file('category_img');
                $name =$file->getClientOriginalName();
                $file->move('img/Category',$name);
                $category->category_img = $name;
            }
         $category->save();
        }
        return redirect('/categoryctr');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::FindOrFail($id);
        $category->delete();
        return redirect('/categoryctr');
    }
}
