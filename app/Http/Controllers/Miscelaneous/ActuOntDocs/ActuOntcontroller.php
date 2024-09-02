<?php

namespace App\Http\Controllers\Miscelaneous\ActuOntDocs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AdminModel\MiscDoc\OntActu\OntActuArt;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuImg;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuImgJoin;
use App\Models\AdminModel\MiscDoc\OntActu\ontartimgCat;

class ActuOntcontroller extends Controller
{
    //
    public function ontActu(Request $request){
        
        
        //essentiels for menu
        //fetching data for site menu
        //-_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_-
        
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
        //end fetching data for site menu 
        
        //-_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_--_-
       
        //return $request->id;

         //start fetching data for ont articles
        
        $data3['article'] = OntActuArt::find($request->id);

        
            # code...
            $data3['article']['images'] = DB::table('ont_actu_art as a')
                                ->join('ont_actu_img_joins as j', 'a.id', '=', 'j.ont_actu_art_id')
                                ->join('ont_actu_imgs as i', 'i.id', '=','j.ont_actu_img_id')
                                ->join('ontartimg_cats as c', 'c.id', '=', 'j.ontartimg_cat_id')
                                ->join('ausers as au', 'au.id','=','a.auser_id')
                                ->select('i.id as image_id',
                                         'i.img_path as image_path',
                                          'c.name as image_category',
                                          'au.name as author_name' ,
                                          'au.email as author_email'
                                            )
                                ->where('a.id','=', $request->id)
                                ->get();
        
         //end fetching data for ont articles
         //return $data3;
         
         

         
         
        return view($data3['article']->adress, ['provinceLien'=>$data, 'article'=>$data3]);
    }
   
}
