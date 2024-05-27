<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index() {
        $title = 'Home page';
        $subtitle = '<em>Subtitle</em>';
        $users = ['Tom', 'Bob'];

        return view('client.index', compact('title', 'subtitle', 'users'));
    }

    function contacts() {
        return view('client.contacts');
    }

    function sendEmail() {
        return 'email';
    }
}
