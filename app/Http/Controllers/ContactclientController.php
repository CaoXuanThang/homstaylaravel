<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactclientController extends Controller
{
    public function index(){
        $title = 'Contact';
        return view('client.contact',compact('title'));
    }
    public function create(ContactRequest $request){
        $contact =Contact::create($request->except('_token'));
        $name = $request->name;
        $phone = $request->phone;
        Session::flash('success', 'Gửi yêu cầu thành công');
        Mail::to($request->email)->send(new ContactMail($name,$phone));
        return redirect()->route('client.contact');
        
    }
}
