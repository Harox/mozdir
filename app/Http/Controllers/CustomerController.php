<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    use AuthorizesRequests;

    // protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index()
    {
        //
    }
 

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

 
    public function store(Request $request)
    {
        // $nameFile = 'noImage.jpg';

        // $cutomer = new Customer;
        // $cutomer->name = $request->input('name');
        // $cutomer->last_name = $request->input('last_name');
        // $cutomer->gender = $request->input('gender');
        // $cutomer->birthday = $request->input('birthday');
        // $cutomer->phone = $request->input('phone');
        // $cutomer->address = $request->input('address');
        // $cutomer->email = $request->input('email');
        // $cutomer->password = $request->input(bcrypt('password'));
        // $cutomer->image = $nameFile;
        // $cutomer->save();
 

        // return redirect('/admin/vendor')->with('success', 'Vendor Created');

    }

    protected function saveCustomer(Request $request)
    {
        $nameFile = 'noImage.jpg';

        $customer = Customer::create([
            'name'          => $request->name,
            'last_name'     => $request->last_name,
            'gender'        => $request->gender,
            'birthday'      => $request->birthday,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'image'         => $nameFile,
        ]);

        return redirect('/');
    }


    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
