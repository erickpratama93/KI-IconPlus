<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class LandingController extends Controller
{
    public function index(Request $request)
    {
        //slider
        $slider = DB::table('sliders');
        $slider = $slider->get();
        //about
        $about = DB::table('about_us');
        $about = $about->get();
        //product
        $product = DB::table('products');
        $product = $product->get();
        //review
        $review = DB::table('reviews');
        $review = $review->get();
        //news
        $news = DB::table('news');
        $news = $news->get();

        // $slider = DB::table('sliders');
        // $slider = $slider->get();

        return view('landing', [
            'slider' => $slider,
            'about' => $about,
            'product' => $product,
            'review' => $review,
            'news' => $news,

        ]);
    }
}
