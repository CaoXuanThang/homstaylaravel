<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Real_estate_categoryController extends Controller
{
    public function index(){
        return view('admin.real_estate_category.index');
    }
}
