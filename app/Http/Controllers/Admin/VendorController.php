<?php

namespace App\Http\Controllers\Admin;

use App\Vendor;
use App\User;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{

    use AuthorizesRequests;

    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $vendors = Vendor::all();
        return view('multiauth::admin.vendor.index')->with('vendors', $vendors);
    }


    public function create()
    {
        return view('multiauth::admin.vendor.create');
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

        $vendor = new Vendor;
        $vendor->name = $request->input('name');
        $vendor->last_name = $request->input('last_name');
        $vendor->gender = $request->input('gender');
        $vendor->birthday = $request->input('birthday');
        $vendor->phone = $request->input('phone');
        $vendor->address = $request->input('address');
        $vendor->email = $request->input('email');
        $vendor->verified = $request->input('verified');
        $vendor->image = $nameFile;
        $vendor->save();

        $user = new User;
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->password = bcrypt('1234');
        $user->image = $nameFile;
        $user->save();
 

        return redirect('/admin/vendor')->with('success', 'Vendor Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
        return view('multiauth::admin.vendor.show')->with('vendor', $vendor);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $vendor = Vendor::find($id);
    //     return view('multiauth::admin.vendor.edit')->with('vendor', $vendor);
    // }

    public function edit(Vendor $vendor)
    {
        return view('multiauth::admin.vendor.edit',compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required'
        ])->validate();


       $vendor =Vendor::find($id);
       $vendor->name = $request->input('name');
       $vendor->last_name = $request->input('last_name');
       $vendor->gender = $request->input('gender');
       $vendor->birthday = $request->input('birthday');
       $vendor->phone = $request->input('phone');
       $vendor->address = $request->input('address');
       $vendor->email = $request->input('email');
       $vendor->job = $request->input('job');
       $vendor->post_code = $request->input('post_code');
       $vendor->verified = $request->input('verified');
       $vendor->save();

       return redirect('/admin/vendor')->with('Success', 'Vendor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();

        return redirect('/admin/vendor')->with('success', 'Vendor deleted!');
    }
}
