<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Statice;
use DB;
use App\Category;
use App\Catvideo;
use App\Career;
use App\Customer;
use App\Reservation;
use Mail;
class pageController extends Controller
{

    public function show_category(){
       $category = Category::all();
        return view('pages.categories',compact('category'));
    }
    public function show_catvideo(){
       $catvideo = Catvideo::all();
        return view('pages.catvideo',compact('catvideo'));
    }
 public function showcategorycontroller(){
        $category = Category::all();
        return view('pages.categoryControl',compact('category'));
    }
     public function showcatvideocontroller(){
        $catvideo = Catvideo::all();
        return view('pages.catvideoControl',compact('catvideo'));
    }

}
