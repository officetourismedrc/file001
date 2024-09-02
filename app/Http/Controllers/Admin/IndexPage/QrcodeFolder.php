<?php

namespace App\Http\Controllers\Admin\IndexPage;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\SiteQrcode;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;


class QrcodeFolder extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //return $request;
        
        $currentTime = Carbon::now()->toTimeString();
        $now = Carbon::now()->toDateString() .' '.  substr($currentTime, 0, strrpos( $currentTime, ':') );

        
        $name = uniqid('img_'.str_replace(':', '-',str_replace(' ', '', $now)));
        //return $name;
        
        $validated = $request->validate([
           'name' => 'url:http,https',
           'qrcodestyle' => [
                                    'required',
                                     Rule::in(['dot', 'square']),
                                ],
            'desc' => 'required|string|max:255',
        ]);
        
        $content = QrCode::size(512)
                        ->style($request->qrcodestyle)
                        ->eye('circle')
                        ->format('png')
                        ->merge('/public/assets/images/LOGOVECTORIEL-qrcode.png')
                        ->errorCorrection('M')
                        ->margin(1)
                        ->generate(
                            $request->name
                        );
            
             Storage::disk('public')->put('indexPage/qrcode/misc/'.$name.'.png', $content);
         
         
            $content = Storage::disk('public')->url('indexPage/qrcode/misc/'.$name.'.png');
        
        $model = new SiteQrcode();
        
        $model->description = $validated['desc'];
        $model->path = $content;
        
        $model->save();
        
        return redirect()->route('index.page.qr-code');
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteQrcode $siteQrcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteQrcode $siteQrcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteQrcode $siteQrcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteQrcode $siteQrcode, Request $request)
    {
        //
        //return $request;
        $data = SiteQrcode::find($request->siteqr);
        //return substr($data->path, 39);
        Storage::disk('public')->delete(substr($data->path, 39));
        $data->delete();
        
        return redirect()->route('index.page.qr-code');
    }
}
