<?php

namespace App\Http\Controllers\Admin;

use App\Package;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Dotenv\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PackageController extends Controller
{
    
    use AuthorizesRequests;
   
    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $packages = Package::orderBy('id','asc')->get();
        return view('multiauth::admin.package.index')->with('packages', $packages);
    }

    public function create(){
        $packages = Package::orderBy('id','asc')->get();
        return view('multiauth::admin.package.create')->with('packages', $packages);
    }


    public function store(Request $request){



        $nameFile = 'noImage.jpg';

        if ($request->hasFile('image')) {
            $genName = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$genName}.{$extension}";
            $upload = $request->image->storeAs('public/package', $nameFile);
            if ( !$upload )
            return redirect()->back()->with('error', 'Upload Error')->withInput();
        }

        $package = new Package;
        $package->name = $request->input('name');
        $package->description = $request->input('description');
        $package->price = $request->input('price');
        $package->duration = $request->input('duration');
        $package->duration_type = $request->input('duration_type');
        $package->benefits = $request->input('benefits');
        $package->image = $nameFile;
        $package->save();

        return redirect('/admin/package')->with('success', 'Package Created');
    }


    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
