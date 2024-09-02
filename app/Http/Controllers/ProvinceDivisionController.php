<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel\ProvinceDoc\Provart;
use App\Models\AdminModel\Province;
use App\Models\AdminModel\Articlecatg;
use Illuminate\Support\Facades\DB;

use App\Models\AdminModel\Deuxniveau;
use App\Models\AdminModel\Decoupagecatg;
use App\Models\AdminModel\DeuxniveauDoc\SousDiv2Art;

class ProvinceDivisionController extends Controller
{
    //
    public function provinceDivisionArticle(Request $request){
        
        //return $request;
        
        $dataArticle['province_id'] = Province::find($request->province_id);
        $dataArticle['sous_division'] = Deuxniveau::find($request->sd_id);
        $dataArticle['article'] = SousDiv2Art::find($request->article_id);
        
         $data = DB::table('provinces as p')
        ->join('provarts as pa', 'p.id', '=', 'pa.province_id')
        ->select('p.id as province_id','p.name as province_name','pa.id as province_article_id','pa.title as province_article_name', 'pa.articlecatg_id as province_article_category','pa.adress as province_article_path')
        ->where('pa.articlecatg_id','=', 1)
        ->get();
        
        
        for ($i = 0; $i < count($data); $i++){
            $data[$i]->ProvinceDivision = DB::table('deuxniveaus  as d')
                                                      ->select('d.id as province_division_id',
                                                               'd.name as province_division_name',
                                                               'd.decoupagecatg_id as division_category_id')
                                                      ->where('d.province_id', '=', $data[$i]->province_id)
                                                      ->get();
                                                      
                                            foreach( $data[$i]->ProvinceDivision as $key=>$value){
                                                $data[$i]->ProvinceDivision[$key]->provinceSousDivisionArticle =  DB::table('sous_div2_art as sda')
                                                                                                                  ->select('sda.title as article_title',
                                                                                                                  'sda.iconPath as icon_path',
                                                                                                                  'sda.adress as article_adress',
                                                                                                                  'sda.id as sd_article_id')
                                                                                                                  ->where('sda.deuxniveau_id','=',$value->province_division_id)
                                                                                                                  ->get();
                                            }
        }
       // return  $dataArticle['article'];
        
        return view($dataArticle['article']->adress, ['provinceLien'=>$data]);
        
        
    }
}
