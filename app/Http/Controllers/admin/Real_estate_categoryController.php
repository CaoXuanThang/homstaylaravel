<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Real_estate_categoryRequest;
use Illuminate\Http\Request;
use App\Models\Real_estate_categories;
// use Illuminate\Support\Facades\Session;
class Real_estate_categoryController extends Controller
{
    public function index()
    {
        $real_estate_categories = Real_estate_categories::select('*')
        ->whereNull('deleted_at')
        ->paginate(5);
        return view('admin.real_estate_category.index', compact('real_estate_categories'));
    }

    public function show()
    {
        return view('admin.real_estate_category.add');
    }
    public function create(Real_estate_categoryRequest $request)
    {
        // dd($request);
        $real_estate_category = new Real_estate_categories();

       
        $real_estate_category->name = $request->name;
        $real_estate_category->description = $request->description;


        $real_estate_category->save();

        // Chuyển hướng đến tuyến đường 'real_estate_category.list' với thông báo thành công
        return redirect()->route('real_estate_category.list')->with('success', 'Thêm thành công');
    }
    public function showupdate($id)
    {
        // cách 1
        // $students = DB::table('studenst')->where('id',$id)->first();

        // cách 2 
        $real_estate_categories = Real_estate_categories::find($id);


        // dd($students);
        return view('admin.real_estate_category.edit', compact('real_estate_categories'));
    }
    public function update(real_estate_categoryRequest $request, $id)
    {
        // $real_estate_categories = Real_estate_categories::find($id);
        $params =  $request->except('_token');
        // if ($request->hasFile('image') && $request->file('image')->isValid()) {
        //     $resultDL = Storage::delete('/public/' . $students->image);
        //     if ($resultDL) {

        //         $params['image'] = uploadFile('hinh', $request->file('image'));
        //     }
        // } else {
        //     $params['image'] = $students->image;
        // }
        // dd($params);
        Real_estate_categories::where('id', $id)->update($params);

        return redirect()->route('real_estate_category.list')->with('success', 'Update thành công.');
    }

    public function delete($id){
        Real_estate_categories::where('id', $id)->delete();
        return redirect()->route('real_estate_category.list')->with('success', 'Xóa thành công id '.$id);
    }
}
