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
    use AuthorizesRequests;

    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $oportunities = Oportunitie::all();
        return view('multiauth::admin.oportunitie.index')->with('oportunities', $oportunities);
    }


    public function create()
    {
        return view('multiauth::admin.oportunitie.create');
    }

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

        $oportunitie = new Oportunitie;
        $oportunitie->title = $request->input('title');
        $oportunitie->description = $request->input('description');
        $oportunitie->city = $request->input('city');
        $oportunitie->expire = $request->input('expire');
        $oportunitie->image = $nameFile;
        $oportunitie->save();
 

        return redirect('/admin/oportunitie')->with('success', 'Oportunitie Created');

    }

    
    public function show($id)
    {
        $oportunitie = Oportunitie::find($id);
        return view('multiauth::admin.oportunitie.show')->with('oportunitie', $oportunitie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oportunitie  $oportunitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Oportunitie $oportunitie)
    {
        return view('multiauth::admin.oportunitie.edit',compact('oportunitie'));
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
