<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $title = 'Home page';
        $subtitle = '<em>Subtitle</em>';
        $users = ['Tom', 'Bob'];

        return view('client.index', compact('title', 'subtitle', 'users'));
    }

    function contacts()
    {
        return view('client.contacts');
    }

    function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //dd($request->all());
        // return redirect('/contacts');
        // return redirect()->route('contacts');
        // return to_route('contacts');
        return back()->with('success', 'Thank!');
    }
}
