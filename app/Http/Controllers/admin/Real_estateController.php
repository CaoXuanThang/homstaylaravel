<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Real_estateController extends Controller
{
    public function index(){
        return view('admin.real_estate.index');
    }
}
