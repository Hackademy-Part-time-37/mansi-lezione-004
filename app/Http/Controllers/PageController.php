<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        $articles = ['ciao', 'sono', 'francesco', 'ultimo'];
        //return view('blog', ['articles' => $articles]);
        return view('blog', compact('articles'));
    }

    public function detail($article)
    {

        return view('detail', compact('article'));
    }

    public function send(Request $request)
    {
        dd($request->all(), $request->fullname);
    }
}
