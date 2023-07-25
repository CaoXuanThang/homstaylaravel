<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\New_categoryRequest;
use App\Models\New_categories;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
class New_categoryController extends Controller
{
    
    public function index()
    {
        $new_categories = New_categories::select('*')
        ->whereNull('deleted_at')
        ->paginate(5);
        return view('admin.new_category.index', compact('new_categories'));
    }

    public function show()
    {
        return view('admin.new_category.add');
    }
    public function create(New_categoryRequest $request)
    {
        $new_categories = New_categories::create($request->except('_token'));
        if ($new_categories->id) {
            Session::flash('success', 'Thêm thành công');
            return redirect()->route('new_category.list');
        }
        // try {
        //     $new_categories = new New_categories();
        //     $new_categories->name = $request->name;
        //     $new_categories->description = $request->description;
        //     $new_categories->save();
    
        //     return redirect()->route('new_category.list')->with('success', 'Thêm thành công');
        // } catch (QueryException $e) {
        //     return redirect()->back()->withInput()->withErrors(['error' => 'Lỗi trong quá trình thêm dữ liệu. Vui lòng thử lại!']);
        // }
        // $new_categories = new New_categories();
        // $new_categories->name = $request->name;
        // $new_categories->description = $request->description;
        // $new_categories->save();
        // return redirect()->route('new_category.list')->with('success', 'Thêm thành công');
    }
    public function showupdate($id)
    {
        // cách 1
        // $students = DB::table('studenst')->where('id',$id)->first();

        // cách 2 
        $new_category = New_categories::find($id);


        // dd($students);
        return view('admin.new_category.edit', compact('new_category'));
    }
    public function update(New_categoryRequest $request, $id)
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
        New_categories::where('id', $id)->update($params);

        return redirect()->route('new_category.list')->with('success', 'Update thành công.');
    }

    public function delete($id){
        New_categories::where('id', $id)->delete();
        return redirect()->route('new_category.list')->with('success', 'Xóa thành công id '.$id);
    }
}
