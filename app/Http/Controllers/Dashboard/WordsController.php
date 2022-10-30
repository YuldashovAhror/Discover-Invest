<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function create()
    {
        return view('dashboard.words');
    }
}
