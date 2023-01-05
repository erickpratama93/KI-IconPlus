<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Slider;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $slider = DB::table('sliders');
        // $item_type = DB::table('types')->get('item_type');
        $slider = $slider->get();

        return view('landing', [
            'slider' => $slider
            // , 'item_type' => $item_type
        ]);
    }
}
