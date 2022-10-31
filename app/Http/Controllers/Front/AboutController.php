<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Timeline;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $timelines = Timeline::all();

        return view('about',[
            'timelines'=>$timelines
        ]);
    }
}
