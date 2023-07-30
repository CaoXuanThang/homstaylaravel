<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Marketing_banners;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Marketing_bannerRequest;

class Marketing_bannerController extends Controller
{
    public function index(){
        $marketing_banner = Marketing_banners::all();
        return view('admin.marketing_banner.index',compact('marketing_banner'));
    }

    public function show(){
        return view('admin.marketing_banner.add');
    }

    public function create(Marketing_bannerRequest $request){
        // Kiểm tra số lượng bản ghi hiện tại trong bảng "products"
        $currentCount = Marketing_banners::count();

        // Đặt số lượng tối đa cho dữ liệu được thêm vào (ví dụ: 100 bản ghi)
        $maxAllowed = 3;

        // Kiểm tra nếu đã đạt đến giới hạn, không thực hiện thêm dữ liệu mới
        if ($currentCount >= $maxAllowed) {
            return redirect()->route('marketing_banner.list')->with('error', 'Đã đạt đến giới hạn số lượng dữ liệu trong bảng Marketing_banner');
        }else{

            $params =  $request->except('_token');
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $params['image'] = uploadFile('image', $request->file('image'));
            }
            
            // dd($params['image']);
            $marketing_banner = Marketing_banners::create($params);
            if ($marketing_banner->id) {
                Session::flash('success', 'Thêm thành công');
                return redirect()->route('marketing_banner.list');
            }
        }
    }

    public function showupdate ($id){
        $marketing_banner = Marketing_banners::find($id);
        return view('admin.marketing_banner.edit',compact('marketing_banner'));
    }

    public function update (Marketing_bannerRequest $request,$id){
        $marketing_banner = Marketing_banners::find($id);
        $param = $request->except('_token');
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $resulDL = Storage::delete('/public/' .$marketing_banner->image);
            if($resulDL){
                $param['image'] = uploadFile('image', $request->file('image'));
            }else{
                $param['image'] = $marketing_banner->image;
            }
        }
        $marketing_banner->update($param);

        return redirect()->route('marketing_banner.list')->with('success','Sửa ảnh thành cônng');
    }

    public function delete($id){
        $delete = Marketing_banners::find($id);

        $delete->delete();
        return redirect()->route('marketing_banner.list')->with('success','Xóa ảnh '. $id);
    }
}
