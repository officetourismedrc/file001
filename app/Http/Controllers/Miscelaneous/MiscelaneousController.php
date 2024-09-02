<?php

namespace App\Http\Controllers\Miscelaneous;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiscelaneousController extends Controller
{
    //
    
    public function index(){
        
        return view('Miscelaneous.infoEssentiel.index', ['provinceLien'=>$data]);
        
        
    }

    //essentiel info method route
    public function infoEssentiel(){

        $data = DB::table('provinces as p')
        ->join('provarts as pa', 'p.id', '=', 'pa.province_id')
        ->select('p.id as province_id','p.name as province_name','pa.id as province_article_id','pa.title as province_article_name', 'pa.articlecatg_id as province_article_category','pa.adress as province_article_path')
        ->where('pa.articlecatg_id','=', 1)
        ->get();

        

         return view('Miscelaneous.infoEssentiel.index', ['provinceLien'=>$data]);
    }
}
