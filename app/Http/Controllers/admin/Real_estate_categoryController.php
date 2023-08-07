<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Real_estate_categoryRequest;
use Illuminate\Http\Request;
use App\Models\Real_estate_categories;
use App\Models\Real_estates;

// use Illuminate\Support\Facades\Session;
class Real_estate_categoryController extends Controller
{
    public function index()
    {
        $real_estate_categories = Real_estate_categories::select('*')
            ->whereNull('deleted_at')
            ->latest()
            ->paginate(5);
            $title = 'Real estate categories';
        return view('admin.real_estate_category.index', compact('real_estate_categories','title'));
    }

    public function show()
    {
        $title = 'Real estate categories';
        return view('admin.real_estate_category.add',compact('title'));
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
        $title = 'Real estate categories';
        $real_estate_categories = Real_estate_categories::find($id);
        return view('admin.real_estate_category.edit', compact('real_estate_categories','title'));
    }
    public function update(real_estate_categoryRequest $request, $id)
    {
        $params =  $request->except('_token');
        Real_estate_categories::where('id', $id)->update($params);
        
        
        return redirect()->route('real_estate_category.list')->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
       
        Real_estate_categories::where('id', $id)->delete();
        return redirect()->route('real_estate_category.list')->with('success', 'Xóa thành công id ' . $id);
    }
}
