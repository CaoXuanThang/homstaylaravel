<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewRequest;
use App\Models\New_categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewController extends Controller
{
    public function index(){
        $new = News::select('*')->whereNull('deleted_at')->paginate(5);
        return view('admin.new.index',compact('new'));
    }

    public function show(){
        $new_category = New_categories::all();
        return view('admin.new.add',compact('new_category'));
    }

    public function create(NewRequest $request){
        $param = $request->except('_token');
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $param['image'] = uploadFile('image', $request->file('image'));
        }

        $new = News::create($param);
        if($new->id){
            return redirect()->route('new.list')->with('success','Thêm sản phẩm thành công');
        }

        
    }

    public function showupdate($id){
        $new = News::find($id);
        $news_category = New_categories::all();
        return view('admin.new.edit',compact('new','news_category'));
    }

    public function update(NewRequest $request, $id){
        $new = News::find($id);
        $param = $request->except('_token');
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $resulDL = Storage::delete('/public/' .$new->image);
            if($resulDL){
                $param['image'] = uploadFile('image', $request->file('image'));
            }else{
                $param['image'] = $new->image;
            }
        }
        $new->update($param);

        return redirect()->route('new.list')->with('success','Sửa tin tức thành cônng');

    }

    public function delete($id){
        $delete = News::find($id);

        $delete->delete();
        return redirect()->route('new.list')->with('success','Xóa tin tức '. $id);
    }
}
