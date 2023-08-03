<?php

namespace App\Http\Controllers;

use App\Models\New_categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewclientController extends Controller
{
    public function index(){
        $new_category = New_categories::select('name','description')->get();
        $new = News::all();
        return view('client.new',compact('new','new_category'));
    }
    public function detail($id){
        $detail_new = News::find($id);
        $similar = News::select('*')
        ->whereNull('deleted_at')
        ->where('news_category_id','=',$detail_new->news_category_id)
        ->where('id','!=',$id)
        ->get();
        return view('client.detail_new',compact('detail_new','similar'));
    }
}
