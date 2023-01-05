<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(Request $request)
    {

        //to slider
        $slider = DB::table('sliders');
        $slider = $slider->get();




        return view('landing', [
            'slider' => $slider
            // , 'item_type' => $item_type
        ]);
    }
}
