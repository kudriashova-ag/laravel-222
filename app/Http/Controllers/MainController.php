<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $books = Book::latest()->limit(4)->get();
        return view('client.index', compact('books'));
    }

    function book(Book $book)
    {
        return view('client.book', compact('book'));
    }

    function genre(Genre $genre)
    {
        //dd($genre);
        $books = Book::where('genre_id', '=', $genre->id)->latest()->get();
        // dd($books);
        return view('client.book', compact('book'));
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
