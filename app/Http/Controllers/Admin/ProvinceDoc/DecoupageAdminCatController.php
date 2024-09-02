<?php

namespace App\Http\Controllers\Admin\ProvinceDoc;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\Decoupagecatg;
use Illuminate\Http\Request;

class DecoupageAdminCatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $list = Decoupagecatg::all();

        return view('Admin.Admindashboard.Province.decoupageAdminCat.index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.admindashboard.province.decoupageAdminCat.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
            'description' => 'required|string|max:255'
        ]);

        Decoupagecatg::create($validated);

       
        return to_route('decoupage-Administratif.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Decoupagecatg $decoupagecatg)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request ,Decoupagecatg $decoupagecatg)
    {
        //
        $da = Decoupagecatg::find($request->decoupage_Administratif);
        return view('admin.admindashboard.province.decoupageAdminCat.edit', ['list'=>$da]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Decoupagecatg $decoupagecatg)
    {
        //
        $da = Decoupagecatg::find($request->decoupage_Administratif);
        $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
            'description' => 'required|string|max:255'
        ]);

        $da->name = $validated['name'];
        $da->description = $validated['description'];

        $da->save();
        return to_route('decoupage-Administratif.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,Decoupagecatg $decoupagecatg)
    {
        //
        $da = Decoupagecatg::find($request->decoupage_Administratif);
        $da->delete();
        return to_route('decoupage-Administratif.index');
    }
}
