<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function show (){
        $data = About::first();
        
        return view ('pages.about',[
            'data' => $data,
        ]);
    }
}
