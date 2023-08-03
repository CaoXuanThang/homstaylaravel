<?php

namespace App\Http\Controllers;

use App\Models\Real_estates;
use Illuminate\Http\Request;

class Product_real_estateController extends Controller
{
    public function index(){

        $real_estate = Real_estates::select('*')
        ->whereNull('deleted_at')
        ->paginate(6);
        $real_estate_slide = Real_estates::select('*')
        ->whereNull('deleted_at')
        ->paginate(4);
        // dd($real_estate);
        return view('client.product_real_estate.index',compact('real_estate','real_estate_slide'));
    }

    public function property($id){
        $property = Real_estates::find($id);
        $real_estate_slide = Real_estates::select('*')
        ->whereNull('deleted_at')
        ->where('real_estate_category_id','=',$property->real_estate_category_id)
        ->where('id','!=',$id)
        ->paginate(4);
        // dd($real_estate);
        // dd($real_estate_slide);
        return view('client.product_real_estate.property',compact('property','real_estate_slide'));
    }
}
