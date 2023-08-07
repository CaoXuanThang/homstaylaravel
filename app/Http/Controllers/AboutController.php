<?php

namespace App\Http\Controllers;

use App\Models\Designers;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About';
        $designer = Designers::all();
        return view('client.about',compact('designer','title'));
    }
}
