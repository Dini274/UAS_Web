<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\CompanyTrusted;
use App\Models\About;
use App\Models\ShopAction;
use App\Models\Menu;
use App\Models\MenuSection;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'hero' => HeroSection::all(),
            'company' => CompanyTrusted::all(),
            'about' => About::all(),
            'shopaction' => ShopAction::all(),
            'menu' => Menu::all(),
            'menusection' => MenuSection::all(),
        ]);
    }
}
