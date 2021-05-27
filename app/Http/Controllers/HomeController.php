<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\MenuSite;

use App\Models\SubMenu;

use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $show_slides = True;

        return view('layouts.app', compact('show_slides'));
    }

    public function getLangPortuguese()
    {
        App::setLocale('pt_BR');

        Session::put('locale','pt_BR');

        return redirect()->back();
    }

    public function getLangEnglish()
    {
        Session::put('locale','en');
        
        return redirect()->back();
    }
}