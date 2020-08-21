<?php

namespace App\Http\Controllers\Admin;


use App\Manufactor;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class ManufactorController extends Controller
{
    use AuthorizesRequests;

    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $manufactors = Manufactor::all();
        return view('multiauth::admin.manufactor.index')->with('manufactors', $manufactors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('multiauth::admin.manufactor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manufactor  $manufactor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufactor = Manufactor::find($id);
        return view('multiauth::admin.vendor.show')->with('manufactor', $manufactor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manufactor  $manufactor
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufactor $manufactor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manufactor  $manufactor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufactor $manufactor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manufactor  $manufactor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufactor $manufactor)
    {
        //
    }
}
