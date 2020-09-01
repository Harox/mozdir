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
        $nameFile = 'noImage.jpg';

        if ($request->hasFile('image')) {
            $genName = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$genName}.{$extension}";
            $upload = $request->image->storeAs('public/images', $nameFile);
            if ( !$upload )
            return redirect()->back()->with('error', 'Upload Error')->withInput();
        }

        $manufactor = new Manufactor;
        $manufactor->name = $request->input('name');
        $manufactor->phone = $request->input('phone');
        $manufactor->address = $request->input('address');
        $manufactor->email = $request->input('email');
        $manufactor->post_code = $request->input('post_code');
        $manufactor->verified = $request->input('verified');
        $manufactor->image = $nameFile;
        $manufactor->save();
 

        return redirect('/admin/manufactor')->with('success', 'Manufactor Created');

    }


    public function show($id)
    {
        // $manufactor = Manufactor::find($id);
        // return view('multiauth::admin.vendor.show')->with('manufactor', $manufactor);
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
