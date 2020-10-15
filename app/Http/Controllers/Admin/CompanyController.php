<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Dotenv\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CompanyController extends Controller
{

    use AuthorizesRequests;
   
    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $companies = Company::orderBy('id','asc')->get();
        return view('multiauth::admin.company.index')->with('companies', $companies);
    }

    public function create(){
        $companies = Company::orderBy('id','asc')->get();
        return view('multiauth::admin.company.create')->with('companies', $companies);
    }


    public function store(Request $request){



        $nameFile = 'noImage.jpg';

        if ($request->hasFile('image')) {
            $genName = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$genName}.{$extension}";
            $upload = $request->image->storeAs('public/companies', $nameFile);
            if ( !$upload )
            return redirect()->back()->with('error', 'Upload Error')->withInput();
        }

        $company = new Company;
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->phone = $request->input('phone');
        $company->address = $request->input('address');
        $company->email = $request->input('email');
        $company->categories = $request->input('categories');
        $company->post_code = $request->input('post_code');
        $company->verified = $request->input('verified');
        $company->image = $nameFile;
        $company->save();

        return redirect('/admin/company')->with('success', 'Company Created');
    }

    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
