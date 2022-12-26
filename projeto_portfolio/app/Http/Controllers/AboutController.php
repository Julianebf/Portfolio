<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about');
    }

    public function export(){
        return response()->download(file: storage_path().'/Curriculo.pdf');
    }
}