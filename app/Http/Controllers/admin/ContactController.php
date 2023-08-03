<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::select("*")->paginate(10);
        
        return view('admin.contact.index',compact('contact'));
    }

    public function showupdate($id){
        $contact = Contact::find($id);
        return view('admin.contact.edit',compact('contact'));
    }
    public function update(ContactRequest $request,$id){
        Contact::where('id', $id)->update($request->except('_token'));
        return redirect()->route('contact.list')->with('success', 'Update thành công.');
    }
    public function delete($id)
    {
        
        $contact = Contact::find($id);
        if(!$contact){
            return redirect()->route('index')->with('error', 'Không tìm thấy bản ghi để xóa.');
        }
        $contact->delete();
        
        return redirect()->route('contact.list')->with('success', 'Xóa thành công id ' . $id);
    }
}
