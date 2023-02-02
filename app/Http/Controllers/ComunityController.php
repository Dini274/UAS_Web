<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyTrusted;
use App\Models\Comunity;

class ComunityController extends Controller
{
    public function index(){
        return view('comunity', [
            'company' => CompanyTrusted::all(),
            'comunity' => Comunity::all(),
        ]);
    }
}
