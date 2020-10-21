<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/provider/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('provider.auth:provider');
    }

    /**
     * Show the Provider dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('provider.home');
    }

}