<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'Home Admin';
        return view('admin.main',compact('title'));
    }
}
