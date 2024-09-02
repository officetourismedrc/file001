<?php

namespace App\Http\Controllers\Admin\ProvinceDoc;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\AdminModel\Province;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\AdminModel\Premierniveau;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Province::all();
        //return $data;

        return view('Admin.Admindashboard.Province.province',['provinceList'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //add a new province
 
        return view('Admin.Admindashboard.Province.addProvince');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        
        $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
        ]);

        Province::create($validated);

        $data = Province::all();
        return to_route('province.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
        
        //  $data = DB::table('deuxniveaus as d')
        //              ->join('provinces as p', 'p.id', '=', 'd.province_id')
        //              ->join('decoupagecatgs as da', 'da.id', '=', 'd.decoupagecatg_id')
        //              ->where('d.province_id','=',$province->id)
        //              ->select('p.name as province', 'da.name as category', 'd.name as entity_name')
        //              ->get();


         $data = DB::table('provinces as p')
                     ->join('deuxniveaus as d','d.province_id','=','p.id')
                     ->join('decoupagecatgs as da', 'da.id', '=', 'd.decoupagecatg_id')
                     ->where('p.id','=',$province->id)
                     ->select('p.name as province','p.id as province_id','d.name as entity_name','d.id as entity_id','da.name as category','da.id as category_id')
                     ->get();

        $hid =  Crypt::encryptString($province->id);

           //if(isset($data[0]))return var_dump($data[0]);
           //return $data;    
        return view('Admin.Admindashboard.Province.ProvinceEdit',['provinceList'=>$province, 'data' => $data, 'hid'=>$hid]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //edit province

        return view('Admin.Admindashboard.Province.editProvince', ['provinceList'=>$province]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province):RedirectResponse
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|unique:provinces|max:255',
        ]);

        $province->name = $validated['name'];

        $province->save();
        return to_route('province.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province):RedirectResponse
    {
        //
        $province->delete();
        return to_route('province.index');
    }
}
