<?php

namespace App\Http\Controllers\Provider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProviderController extends Controller
{


    public function __construct()
    {
        $this->middleware('provider.auth:provider');
        
    }

    public function index()
    {
        //
    }

    public function showCompanies() {
        return view('provider.company.index');
    }

    public function companies() {
        return view('provider.company.index');
    }

 
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sevices() {
        return view('provider.services.index');
    }

    public function showSevices() {
        return view('provider.services.index');
    }

    public function appointment() {
        return view('provider.appointment.index');
    }

    public function showAppointment() {
        return view('provider.appointment.index');
    }

    public function inbox() {
        return view('provider.inbox.index');
    }

    public function showInbox() {
        return view('provider.inbox.index');
    }

    public function pacakage() {
        return view('provider.pacakage.index');
    }
    public function showPacakage() {
        return view('provider.pacakage.index');
    }

    public function notification() {
        return view('provider.notification.index');
    }
    public function showNotification() {
        return view('provider.notification.index');
    }

    public function account() {
        return view('provider.account.index');
    }
    public function showAccount() {
        return view('provider.account.index');
    }

    public function profile() {
        return view('provider.profile.index');
    }
    public function showProfile() {
        return view('provider.profile.index');
    }
}
