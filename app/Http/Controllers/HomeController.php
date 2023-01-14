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



    //user controller
    public function lowongan(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('user.lowongan', [
            'loker' => $loker,

        ]);
    }
    public function news(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('user.news', [
            'loker' => $loker,

        ]);
    }
    public function guruTamu(Request $request)
    {
        $guru = DB::table('guest_teachers');
        $guru = $guru->get();


        return view('user.guru', [
            'guru' => $guru,

        ]);
    }

    //pkl controller
    public function dataPkl(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('user.pkl.data', [
            'loker' => $loker,

        ]);
    }
    public function daftarPkl(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('user.pkl.daftar', [
            'loker' => $loker,

        ]);
    }
}
