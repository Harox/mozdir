<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('pages.home')->with('packages', $packages);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.sevices');
    }

    public function vendor()
    {
        return view('pages.vendor');
    }
}
