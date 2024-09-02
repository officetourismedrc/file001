<?php

namespace App\Http\Controllers\Admin\IndexPage\QrcodeFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\AdminModel\SiteQrcode;

class QrcodeGeneratorController extends Controller
{
    //
    
    public function index(){
        
        if (!Storage::disk('public')->exists('indexPage/qrcode/file.png')) {
             $content = QrCode::size(512)
                        ->style('dot')
                        ->eye('circle')
                        ->format('png')
                        ->merge('/public/assets/images/LOGOVECTORIEL.png')
                        ->errorCorrection('M')
                        ->margin(1)
                        ->generate(
                            'https://officetourisme-rdc.com',
                        );
             Storage::disk('public')->put('indexPage/qrcode/file.png', $content);
          
         }
         $qrcodes = SiteQrcode::all();
         
          $content = Storage::disk('public')->url('indexPage/qrcode/file.png'); 
          return view('Admin.Admindashboard.IndexPage.QrcodeFolder.index',['itemPath'=> $content, 'qrcodes'=>$qrcodes]);
          
    }
    
     public function createQrcode(Request $request){
         
         return view('Admin.Admindashboard.IndexPage.QrcodeFolder.create');
         
     }
    
    public function storeQrcode(Request $request){
        return $request;
        
        $content = QrCode::size(512)
                        ->style($request->qrcodestyle)
                        ->eye('circle')
                        ->format('png')
                        ->merge('/public/assets/images/LOGOVECTORIEL.png')
                        ->errorCorrection('M')
                        ->margin(1)
                        ->generate(
                            $request->name
                        );
            
             Storage::disk('public')->put('indexPage/qrcode/misc/file.png', $content);
         
         
          $content = Storage::disk('public')->url('indexPage/qrcode/misc/file.png'); 
        
    }
}
