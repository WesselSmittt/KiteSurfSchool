<?php

namespace App\Http\Controllers;

use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:32',
            'last_name' => 'required|max:32',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'message' => 'required|string|required|max:255'
        ]);
        $userContact = new UserContact();
        $userContact->first_name = $request->input('first_name');
        $userContact->last_name = $request->input('last_name');
        $userContact->email = $request->input('email');
        $userContact->phone_number = $request->input('phone_number');
        $userContact->message = $request->input('message');
        $userContact->save();

        // Additional logic or redirection after successful data storage

        return redirect()->back()->with('success', 'Comment is opgeslagen!');
    }
}
