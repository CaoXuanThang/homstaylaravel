<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::select("*")->latest()->paginate(10);
        $title = 'Contact';
        return view('admin.contact.index',compact('contact','title'));
    }

    public function showupdate($id){
        $contact = Contact::find($id);
        $title = 'Contact';
        return view('admin.contact.edit',compact('contact','title'));
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
