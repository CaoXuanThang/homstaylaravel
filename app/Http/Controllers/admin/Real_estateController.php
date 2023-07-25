<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Real_estateRequest;
use App\Models\Real_estate_categories;
use App\Models\Real_estates;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// use Illuminate\Support\Facades\Session as FacadesSession;
// use Symfony\Component\HttpFoundation\Session\Session;

class Real_estateController extends Controller
{
    public function index()
    {
        
        $Real_estate = Real_estates::select('*')
        ->whereNull('deleted_at')
        ->paginate(5);
        // $real_estate_categories = Real_estate_categories::all();
        return view('admin.real_estate.index', compact('Real_estate'));
    }

    public function show()
    {
        $real_estate_categories = Real_estate_categories::all();
        return view('admin.real_estate.add',compact('real_estate_categories'));
    }

    public function create(Real_estateRequest $request)
    {

        $params =  $request->except('_token');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $params['image'] = uploadFile('image', $request->file('image'));
        }
        
        // dd($params['image']);
        $Real_estate = Real_estates::create($params);
        if ($Real_estate->id) {
            Session::flash('success', 'Thêm thành công');
            return redirect()->route('real_estate.list');
        }
    }
    public function showupdate($id)
    {
        // cách 1
        // $students = DB::table('studenst')->where('id',$id)->first();

        // cách 2 
        $real_estate = Real_estates::find($id);
        $real_estate_categories = Real_estate_categories::all();

        // dd($students);
        return view('admin.real_estate.edit', compact('real_estate','real_estate_categories'));
    }
    public function update(Real_estateRequest $request, $id)
    {
        $real_estate = Real_estates::find($id);
        $params =  $request->except('_token');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $resultDL = Storage::delete('/public/' . $real_estate->image);
            if ($resultDL) {

                $params['image'] = uploadFile('image', $request->file('image'));
            }
        } else {
            $params['image'] = $real_estate->image;
        }
        // dd($params);
        Real_estates::where('id', $id)->update($params);

        return redirect()->route('real_estate.list')->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        
        $real_estate = Real_estates::find($id);
        if(!$real_estate){
            return redirect()->route('index')->with('error', 'Không tìm thấy bản ghi để xóa.');
        }
        $real_estate->delete();
        
        return redirect()->route('real_estate.list')->with('success', 'Xóa thành công id ' . $id);
    }
    
}
