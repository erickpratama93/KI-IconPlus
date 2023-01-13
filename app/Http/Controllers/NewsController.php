<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(Request $request)
    {

        //news
        $news = DB::table('news');
        $news = $news->get();

        // $slider = DB::table('sliders');
        // $slider = $slider->get();

        return view('homepage', [
            'news' => $news,
        ]);
    }
}
