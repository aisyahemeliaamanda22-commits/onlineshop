<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the About page.
     */
    public function about()
    {
        $viewData = [];

        $viewData["title"] = "About Us - Online Store";
        $viewData["subtitle"] = "About Us";
        $viewData["description"] = "This is an online store created with Laravel.";
        $viewData["author"] = "Manda";

        return view('home.about')->with("viewData", $viewData);
    }
}