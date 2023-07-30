<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;

class ContactclientController extends Controller
{
    public function index(){
        
        return view('client.contact');
    }
    public function create(ContactRequest $request){
        $contact =Contact::create($request->except('_token'));
        if ($contact->id) {
            Session::flash('success', 'Gửi yêu cầu thành công');
            return redirect()->route('client.contact');
        }
    }
}
