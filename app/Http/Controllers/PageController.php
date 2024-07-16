<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function blog()
    {
        $articles = ['ciao', 'sono', 'francesco', 'ultimo'];
        //return view('blog', ['articles' => $articles]);
        return view('blog', compact('articles'));
    }

    public function detail()
    {
        return view('detail');
    }
}
