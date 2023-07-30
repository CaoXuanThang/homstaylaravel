<?php

namespace App\Http\Controllers\admin;

use App\Models\Designers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesignerRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DesignerController extends Controller
{
    public function index(){

        $designer = Designers::select("*")
        ->paginate(5);
        return view('admin.designer.index',compact('designer'));
    }
    public function detail($id){

        $designer_detail = Designers::find($id);
        return view('admin.designer.detail',compact('designer_detail'));
    }

    public function show(){
        return view('admin.designer.add');
    }
    public function create(DesignerRequest $request){
        
        $params =  $request->except('_token');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $params['image'] = uploadFile('image', $request->file('image'));
        }
        $designer = Designers::create($params);
            if ($designer->id) {
                Session::flash('success', 'Thêm thành công');
                return redirect()->route('designer.list');
            }
    }

    public function showupdate($id){
        $designer = Designers::find($id);
        return view('admin.designer.edit',compact('designer'));
    }

    public function update(DesignerRequest $request,$id){
        $designer = Designers::find($id);
        $params =  $request->except('_token');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $resultDL = Storage::delete('/public/' . $designer->image);
            if ($resultDL) {

                $params['image'] = uploadFile('image', $request->file('image'));
            }
        } else {
            $params['image'] = $designer->image;
        }
        // dd($params);
        Designers::where('id', $id)->update($params);

        return redirect()->route('designer.list')->with('success', 'Update thành công.');
    }
    public function delete($id)
    {
        
        $designer = Designers::find($id);
        if(!$designer){
            return redirect()->route('index')->with('error', 'Không tìm thấy bản ghi để xóa.');
        }
        $designer->delete();
        
        return redirect()->route('designer.list')->with('success', 'Xóa thành công id ' . $id);
    }
}
