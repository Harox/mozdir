<?php

namespace App\Http\Controllers\Admin;

use App\Oportunitie;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class OportunitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oportunitie  $oportunitie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oportunitie  $oportunitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Oportunitie $oportunitie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oportunitie  $oportunitie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oportunitie $oportunitie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oportunitie  $oportunitie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oportunitie $oportunitie)
    {
        //
    }
}
