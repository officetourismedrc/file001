<?php

namespace App\Http\Controllers\Admin\IndexPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel\SiteQrcode;

class IndexPageController extends Controller
{
    //
    
    public function index(){
        
        //return index page for all index function
        
        $qrcodes = SiteQrcode::all();
        //return 'pour toi';
        
        return view('Admin.Admindashboard.IndexPage.index', ['qrcodes'=>$qrcodes]);
    }
}
