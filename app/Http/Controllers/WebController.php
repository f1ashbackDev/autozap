<?php

namespace App\Http\Controllers;

use App\Models\Catalogs;
use App\Models\Products;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index',[
            'products' => Products::with('image', 'category')->take(4)->get(),
            'category' => Catalogs::all()
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function dostava()
    {
        return view('pages.dostava');
    }

    public function partners()
    {
        return view('pages.partners');
    }

    public function stats()
    {
        return view('pages.stats');
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }
}
