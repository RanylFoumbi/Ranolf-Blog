<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class userContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $req){
         
        $validatedData = $req->validate([
            'fullname' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'compagny' => 'required',
            'message' => 'required',
        ]);


       $contactList = Contact::create([
        'fullname' => $req->input('fullname'),
        'email' => $req->input('email'),
        'phone' => $req->input('phone'),
        'compagny' => $req->input('compagny'),
        'message' => $req->input('message'),
       ]);

        return redirect()->action('userContactController@index'); 
    }
}
