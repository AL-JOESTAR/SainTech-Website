<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view ('pages.contact');
    }

    public function store (Request $request){
        $request->validate([
            'name' => 'required|min:8',
            'email' => 'required',
            'subject' => 'required|min:5',
            'message' => 'required',
        ]);

        Contact::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'message' =>$request->message,
        ]);

        return redirect('/contact');
        
    }
}
