<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\New_categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\New_categoryRequest;
use Illuminate\Support\Facades\Storage;

class New_categoryController extends Controller
{
    
    public function index()
    {
        $new_categories = New_categories::select('*')
        ->whereNull('deleted_at')
        ->latest()
        ->paginate(5);
        $title = 'News Categories';
        return view('admin.new_category.index', compact('new_categories','title'));
    }

    public function show()
    {
        $title = 'Add News categories ';
        return view('admin.new_category.add',compact('title'));
    }
    public function create(New_categoryRequest $request)
    {   $param = $request->except('_token');
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $param['image'] = uploadFile('image', $request->file('image'));
        }
        $new_categories = New_categories::create($param);
        if ($new_categories->id) {
            Session::flash('success', 'Thêm thành công');
            return redirect()->route('new_category.list');
        }
    }
    public function showupdate($id)
    {
        $title = 'News categories';
        $new_category = New_categories::find($id);
        return view('admin.new_category.edit', compact('new_category','title'));
    }
    public function update(New_categoryRequest $request, $id)
    {
        $new_categories = New_categories::find($id);
        $params =  $request->except('_token');
     
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $resulDL = Storage::delete('/public/' .$new_categories->image);
            if($resulDL){
                $params['image'] = uploadFile('image', $request->file('image'));
            }else{
                $params['image'] = $new_categories->image;
            }
        }
        
        $new_categories->update($params);

        return redirect()->route('new_category.list')->with('success', 'Update thành công.');
    }

    public function delete($id){
        New_categories::where('id', $id)->delete();
        return redirect()->route('new_category.list')->with('success', 'Xóa thành công id '.$id);
    }
}
