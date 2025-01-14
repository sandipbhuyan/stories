<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $route = array('show' => 'home');

    private $indexvariables = array(
        'title' => 'DASHBOARD',
        'url' => 'home',
        'urltomain' => '/'
    );
    private $multipostvar = "home";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/stories');
    }
}
