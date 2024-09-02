<?php

namespace App\Http\Controllers\Admin\Parametre;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\MiscDoc\OntActu\Ont_a_catmeta;
use Illuminate\Http\Request;

class articleCatContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $data = Ont_a_catmeta::all();
        
        //return $data;
        
        return view('Admin.Admindashboard.parametre.articleContentCateg.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
         return view('Admin.Admindashboard.parametre.articleContentCateg.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $validated = $request->validate([
            'name' => 'required|string|unique:ont_a_catmetas|max:255',
            'desc' => 'required|string|max:255',
        ]);

        Ont_a_catmeta::create($validated);

        $data = Ont_a_catmeta::all();
        return to_route('ont_a_catmeta.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ont_a_catmeta $ont_a_catmeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ont_a_catmeta $ont_a_catmeta)
    {
        //
        return view('Admin.Admindashboard.parametre.articleContentCateg.edit', ['data'=>$ont_a_catmeta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ont_a_catmeta $ont_a_catmeta)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
             'desc' => 'required|string|max:255',
        ]);

        $ont_a_catmeta->name = $validated['name'];

        $ont_a_catmeta->save();
        return to_route('ont_a_catmeta.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ont_a_catmeta $ont_a_catmeta)
    {
         //
        $ont_a_catmeta->delete();
        return to_route('ont_a_catmeta.index');
    }
}
