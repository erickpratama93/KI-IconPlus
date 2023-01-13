<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $news = DB::table('news');
        $news = $news->get();

        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('homepage', [
            'news' => $news,
            'loker' => $loker,

        ]);
        // return view('homepage');
    }
    public function loker(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('lowongan', [
            'loker' => $loker,

        ]);
    }
}
