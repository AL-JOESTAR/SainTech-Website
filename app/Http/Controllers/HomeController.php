<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class HomeController extends Controller
{
    Public function show () {
        $data = CompanyProfile::first();
        // dd($data);
        return view ('pages.home', [
            'data' => $data,
        ]);
    }
}
