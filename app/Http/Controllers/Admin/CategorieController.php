<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Dotenv\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategorieController extends Controller
{
    use AuthorizesRequests;

    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $categories = Categorie::orderBy('id','asc')->get();
        return view('multiauth::admin.categorie.index')->with('categories', $categories);
    }

    public function create(){
        $categories = Categorie::orderBy('id','asc')->get();
        return view('multiauth::admin.categorie.create')->with('categories', $categories);
    }


    public function store(Request $request){



        $nameFile = 'noImage.jpg';

        if ($request->hasFile('image')) {
            $genName = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$genName}.{$extension}";
            $upload = $request->image->storeAs('public/categories', $nameFile);
            if ( !$upload )
            return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
        }

        $categorie = new Categorie;
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->parent = $request->input('parent');
        $categorie->icon = $nameFile;
        $categorie->save();

        return redirect('/admin/categorie')->with('success', 'categorie Created');
    }




    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
