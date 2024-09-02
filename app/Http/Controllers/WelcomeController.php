<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel\Articlecatg;
use App\Models\AdminModel\ProvinceDoc\Provart;
use App\Models\AdminModel\Miscelanouesartcl;
use App\Models\AdminModel\Miscellaneou;
use App\Models\AdminModel\Province;
use App\Models\AdminModel\Deuxniveau;
use App\Models\AdminModel\MiscDoc\InfoEssentl\Infoessentiel;
use App\Models\AdminModel\MiscDoc\InfoEssentl\Infoessentielart;
use Illuminate\Support\Facades\DB;

use App\Models\AdminModel\MiscDoc\OntActu\OntActuArt;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuImg;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuImgJoin;
use App\Models\AdminModel\MiscDoc\OntActu\ontartimgCat;

class WelcomeController extends Controller
{
    //index page, main page

    public function welcome(){
        //
        $data = DB::table('provinces as p')
        ->join('provarts as pa', 'p.id', '=', 'pa.province_id')
       
        ->select('p.id as province_id',
                 'p.name as province_name',
                 'pa.id as province_article_id',
                 'pa.title as province_article_name', 
                 'pa.articlecatg_id as province_article_category',
                 'pa.adress as province_article_path')
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
        
        
      //return $data;

        $data1 = DB::table( 'infoessentiels as ie')
                        ->join('infoessentielarts as iea', 'ie.id', '=', 'iea.infoessentiel_id')
                        ->select('ie.name as info_ess_name',
                                'ie.id as info_ess_id', 
                                'iea.title as info_ess_art_title', 
                                'iea.id as info_ess_art_id', 
                                'iea.articlecatg_id as info_ess_article_catg', 
                                'iea.adress as info_ess_path' )
                        ->get();
         $data2 = Infoessentiel::all();
         foreach($data2 as $key => $value) {
            $data2[$key]['article'] = $value->infoEssentielArticles()->get();
         }

         //start fetching data for ont articles
        
         $data3 = OntActuArt::all();

         foreach ($data3 as $key => $value) {
            # code...
            $data3[$key]['images'] = DB::table('ont_actu_art as a')
                                            ->join('ont_actu_img_joins as j', 'a.id', '=', 'j.ont_actu_art_id')
                                            ->join('ont_actu_imgs as i', 'i.id', '=','j.ont_actu_img_id')
                                            ->join('ontartimg_cats as c', 'c.id', '=', 'j.ontartimg_cat_id')
                                            ->select(
                                                     'i.img_path as img_path',
                                                      'c.name as img_category'
                                                    )
                                            ->where('j.ont_actu_art_id','=',$data3[$key]->id)
                                        ->get();
         }


        //  foreach ($data3 as $key => $value) {
        //     # code...
        //     $data3[$key]['images'] = DB::table('ont_actu_art as a')
                                        
        //                                 ->get();
        //  }


         //end fetching data for ont articles

        //return $data3;
         //return dump(isset($data2[2]->article[0]));
        
        return view('welcome' , ['provinceLien'=>$data, 'infoess'=>$data2, 'actuOnt'=>$data3]);
    }
}
