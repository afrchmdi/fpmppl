<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function temuan(){
        return view('page.temuan');
    }

    public function kehilangan(){
        // return view('')
    }
}
