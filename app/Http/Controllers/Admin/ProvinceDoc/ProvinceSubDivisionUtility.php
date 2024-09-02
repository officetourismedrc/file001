<?php

namespace App\Http\Controllers\Admin\ProvinceDoc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AdminModel\DeuxniveauDoc\SousDiv2Art;
use App\Models\AdminModel\Deuxniveau;
use App\Models\AdminModel\Province;

class ProvinceSubDivisionUtility extends Controller
{
    //
    
    public function ProvinceSudDivisionArticles(Request $request){
        
        
         $data['article'] = SousDiv2Art::where('deuxniveau_id', $request->province_sous_division)
                                   ->get();
        
        $data['sousDivision'] = Deuxniveau::find($request->province_sous_division);
        $data['province'] = Province::find($data['sousDivision']->province_id);
        
        
         //return $data;
         return view('Admin.Admindashboard.Province.DeuxiemeNiveau.articleDoc.showSubDivisionArticle', ['list'=>$data]);
    }
}
