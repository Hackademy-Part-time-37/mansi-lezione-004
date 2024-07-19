<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        //validare i dati
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);


        //Mappare i dati per gestirli al meglio
        $data = [
            'fullname' => strtolower($request->fullname),
            'email' => $request->email,
            'messaggio' => $request->message
        ];

        Mail::to('emanuele@email.it')->send(new InfoMail($data));



        return redirect()->route('homepage');
        //dd($request->all(), $request->fullname);
    }
}
