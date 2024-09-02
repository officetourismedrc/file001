<?php

namespace App\Http\Controllers\Admin\ProvinceDoc;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\Deuxniveau;
use Illuminate\Http\Request;

use App\Models\AdminModel\Province;
use App\Models\AdminModel\Decoupagecatg;


class DeuxniveauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $list =  Deuxniveau::all();

        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['province'] = Province::all();
        $data['category'] = Decoupagecatg::all();

        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.add', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
            'decoupagecatg_id' => 'required|string|max:255',
            'province_id' => 'required|integer|'
        ]);

        Deuxniveau::create($validated);

        return to_route('deuxniveau.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Deuxniveau $deuxniveau)
    {
        //code goes here
        // return $deuxniveau;
        $deuxniveau->province = Province::find($deuxniveau->province_id);
        $deuxniveau->division = Decoupagecatg::find($deuxniveau->decoupagecatg_id);
        //return $deuxniveau;
        //'provinceList'=>$province,  'hid'=>$hid
        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.show',['data' => $deuxniveau]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deuxniveau $deuxniveau)
    {
        //
         $data['province'] = Province::all();
         $data['category'] = Decoupagecatg::all();

        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.edit', ['deuxniveau'=>$deuxniveau , 'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deuxniveau $deuxniveau)
    {
        //
       
        $da = Deuxniveau::find($request->deuxniveau);
        $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
            'decoupagecatg_id' => 'required|string|max:255',
            'province_id' => 'required|integer|'
        ]);

        $deuxniveau->name = $validated['name'];
        $deuxniveau->decoupagecatg_id = $validated['decoupagecatg_id'];
        $deuxniveau->province_id = $validated['province_id'];

        $deuxniveau->save();
        return to_route('deuxniveau.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Deuxniveau $deuxniveau)
    {
        //
        //$da = Deuxniveau::find($request->decoupage_Administratif);
        $deuxniveau->delete();
        return to_route('deuxniveau.index');
    }

    // return appropriate decoupage 
    // 

    // public function ville(){
    //       return view('admin.admindashboard.province.DeuxiemeNiveau.add_ville', $this->create());
    // }

    // public function territoire(){
        
    //     return view('admin.admindashboard.province.DeuxiemeNiveau.add_territoire',$this->create());
    // }

    // public function district(){

    //     return 'ok in there';

    //     return view('admin.admindashboard.province.DeuxiemeNiveau.add_district',$this->create());
    // }
}
