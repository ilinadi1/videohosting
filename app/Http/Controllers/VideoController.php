<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(Request $request){
        $main = $request->all();
        return view('index');
    }
}


