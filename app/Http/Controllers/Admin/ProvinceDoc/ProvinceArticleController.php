<?php

namespace App\Http\Controllers\Admin\ProvinceDoc;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\ProvinceDoc\Provart;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\AdminModel\Province;
use Illuminate\Support\Facades\DB;

class ProvinceArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        try {
            $decrypted = Crypt::decryptString($request->hid);
        } catch (DecryptException $e) {
            // ...
            return redirect(route('admin.dashboard'));
        }

        

        $province['model'] = Province::find($decrypted);

         $province['article'] =  DB::table('provinces as p')
            ->join('provarts as pa', 'p.id', '=', 'pa.province_id')
            ->join('ausers as au', 'au.id', '=', 'pa.auser_id')
            ->where('p.id','=',$province['model']->id)
            ->select('p.id as province_id','p.name as province_name',
                     'pa.id as province_article_id','pa.title as article_title','pa.qr_code as article_qr_code',
                     'pa.priority as article_priority','pa.display_it as weather_appear_or_not','pa.clicks as article_click',
                     'au.id as admin_user_id', 'au.name as author_name', 'au.email as author_email')
            ->get();

         
        // return $rt->province_name;
        return view('Admin.Admindashboard.Province.articles.index',['data'=>$province]);
        
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Provart $provart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provart $provart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provart $provart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provart $provart)
    {
        //
    }
}
