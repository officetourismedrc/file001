<?php

namespace App\Http\Controllers\Admin\IndexPage\QrcodeFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AdminModel\SiteQrcode;
class DownloadQrCodeController extends Controller
{
    //
    public function download(){
        
        
        
        return Storage::disk('public')->download('indexPage/qrcode/file.png', 'officetourisme-rdc');
    }
    
    public function downloadMisc(Request $request){
        
        
        $data = SiteQrcode::find($request->id);
        //return substr($data->path, 39);
        return Storage::disk('public')->download(substr($data->path, 39), 'file');
    }
        
}
