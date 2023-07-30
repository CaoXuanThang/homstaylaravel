<?php

namespace App\Http\Controllers;

use App\Models\Designers;
use App\Models\Marketing_banners;
use App\Models\Real_estates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $real_estate_slide = Real_estates::take(10)->get();
        $marketing_banner = Marketing_banners::all();
        $designer = Designers::all();
        return view('client.home', compact('real_estate_slide','marketing_banner','designer'));
    }
}
