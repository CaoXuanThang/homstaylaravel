<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class New_categoryController extends Controller
{
    public function index(){
        return view('admin.new_category.index');
    }
}
