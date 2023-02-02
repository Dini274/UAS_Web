<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyTrusted;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            'company' => CompanyTrusted::all(),
            'about' => About::all(),
        ]);
    }
}
