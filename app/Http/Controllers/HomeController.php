<?php

namespace App\Http\Controllers;

use App\Models\Designers;
use App\Models\Marketing_banners;
use App\Models\New_categories;
use App\Models\Real_estates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $real_estate_slide = Real_estates::take(10)->get();
        $marketing_banner = Marketing_banners::all();
        $designer = Designers::all();
        $title = 'Home';
        $new_category = New_categories::orderBy('created_at', 'desc')
        ->take(4)
        ->select('name','description')
        ->get();
        return view('client.home', compact('real_estate_slide','marketing_banner','designer','new_category','title'));
    }

    public function search(Request $request){
        $title = 'Search';
        $query = $request->input('query');
        $marketing_banner = Marketing_banners::all();
        $search = Real_estates::select("*")
        ->where('name','like','%'.$query.'%')
        ->orderBy('created_at', 'desc')
        ->get();
         return view('client.search',compact('search','marketing_banner','title'));
        
    }
}
