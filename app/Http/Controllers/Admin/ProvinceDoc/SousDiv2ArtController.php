<?php

namespace App\Http\Controllers\Admin\ProvinceDoc;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


use App\Http\Controllers\Controller;
use App\Models\AdminModel\DeuxniveauDoc\SousDiv2Art;
use App\Models\AdminModel\DeuxniveauDoc\Sd2imageArt;
use App\Models\AdminModel\Deuxniveau;
use App\Models\AdminModel\Province;
use App\Models\AdminModel\Articlecatgs;
use App\Models\AdminModel\SiteTag;
use App\Models\AdminModel\DeuxniveauDoc\Sd2artTags;

use App\Models\AdminModel\MiscDoc\OntActu\OntActuImg;

use Illuminate\Http\Request;

class SousDiv2ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = SousDiv2Art::all();
        
        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.articleDoc.index', ['list'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        
       // return $request;
        
        $data['province'] = Province::find($request->province);
        $data['sousDivision']= Deuxniveau::find($request->sousDivision);
        $data['article']= SousDiv2Art::find($request->article);
        $data["user"] = $request->user();
        $data["articlecatg"] = Articlecatgs::all();
        $data["articleTag"] = SiteTag::all();
        //return $data;
        
        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.articleDoc.add',["data"=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
        //return var_dump($request->tags);
      
         $validated = $request->validate([
            'provinceId' => 'required|integer',
            'hdsousDivision' => 'required|integer',
            'title' => 'required|string|max:255',
             'articleCategory' => 'required|integer',
            'tags.*' => 'required|integer',
            'priority' => 'required|integer',
              'iconPath' => 'required|image',
            'banner.*' => 'required|image',
            'titleImage' => 'required|image',
            'contentSwitcher' =>[
                                    'required',
                                     Rule::in(['true', 'false']),
                                ],
            
        ]);
        
        //return $validated['hdsousDivision'];
         $iconpathSlider = 'images/';
        
         //image for title ==========================================1
         
         if($request->hasfile('titleImage'))
         {
             $file = $request->file('titleImage');
             $fileName = $file->hashName();
             
             Storage::disk('public')->put($iconpathSlider.$fileName, file_get_contents($file));
             $pathToImg = Storage::disk('public')->url($iconpathSlider.$fileName);
             //$sousDivisionArticle->iconPath = $pathToImg;//save the file in the serveur, get the path and save it into the table
         }
         
         $titleImage = $pathToImg; //path to article titles image --=================
        
        
        
        //banner image storing process ===============================2
        
         foreach($request->banner as $item){
             

         if(isset($item))
         {
             $file = $item;
             $fileName = $file->hashName();
             
             Storage::disk('public')->put($iconpathSlider.$fileName, file_get_contents($file));
             $pathToImg = Storage::disk('public')->url($iconpathSlider.$fileName);
             //$sousDivisionArticle->iconPath = $pathToImg;//save the file in the serveur, get the path and save it into the table
         }
         
         $bannerA[] = $pathToImg;//banner images =======================
      } 
      //return $bannerA;
        
        //thumbnail image storing process ===============================3
        
        //operation for article icon image
        $iconpath = 'images/iconImages/';
        
         if($request->hasfile('iconPath'))
         {
             $file = $request->file('iconPath');
             $fileName = $file->hashName().'.'.$file->extension();
             
             Storage::disk('public')->put($iconpath.$fileName, file_get_contents($file));
             $iconPath_img = Storage::disk('public')->url($iconpath.$fileName);
            //save the file in the serveur, get the path and save it into the table
         }
        //end operation for article icon image
        
        //storing operation
        
        
        //$data['sousDivision'] = Deuxniveau::find($validated['hdsousDivision']);
        $sousDivisionArticle = new SousDiv2Art();
        $sousDivisionArticle->deuxniveau_id = $validated['hdsousDivision'];
        $sousDivisionArticle->title = $validated['title'];
        $sousDivisionArticle->iconPath = $iconPath_img;
        $sousDivisionArticle->auser_id = Auth::id();
        $sousDivisionArticle->articlecatg_id = $validated['articleCategory'];
        $sousDivisionArticle->adress = 'Province'.'province_name'.'sous-division-name'.'index'; //create the folder and place the files
        $sousDivisionArticle->qr_code = 'no_data';
        $sousDivisionArticle->priority = $validated['priority'];
        if($validated['contentSwitcher'] == 'true')
        $sousDivisionArticle->content_switcher = true;
        else
        $sousDivisionArticle->content_switcher = false;
        $sousDivisionArticle->clicks = 0;
        
        $sousDivisionArticle->save();
       
       $lastArticleId = $sousDivisionArticle->id;
       
       //image slider
       
       foreach($bannerA as $item){
           
           $imageSliderData = new OntActuImg();
           $imageSliderData->img_path = $item;
           $imageSliderData->title = 'no_entry';
           $imageSliderData->desc = 'no_entry';
           $imageSliderData->author = 'not_specified';
           
           $imageSliderData->save();
           $imageSlider = $imageSliderData->id;
           
           $imageJoin = new Sd2imageArt();
           
           $imageJoin->ont_actu_img_id = $imageSlider;
           $imageJoin->sous_div2_art_id = $lastArticleId;
           $imageJoin->ontartimg_cat_id = 2;
           
           $imageJoin->save();
           
       }
       
       //image title
       
       $imageTitleData = new OntActuImg();
       
           $imageTitleData->img_path = $titleImage;
           $imageTitleData->title = 'no_entry';
           $imageTitleData->desc = 'no_entry';
           $imageTitleData->author = 'not_specified';
           
           $imageTitleData->save();
           $imageTitle = $imageTitleData->id;
           
           $imageJoin = new Sd2imageArt();
           $imageJoin->ont_actu_img_id = $imageTitle;
           $imageJoin->sous_div2_art_id = $lastArticleId;
           $imageJoin->ontartimg_cat_id = 4;
           
           $imageJoin->save();
           
           //image icon is directly save in the article table
           
           ///////////////////////////////////////////////
        //////////////////////////////////////////////////////
        
        //tags are saved here
        
        foreach($validated['tags'] as $item){
        
        $articleTags = new Sd2artTags();
        
          $articleTags->site_tag_id =$item;
          $articleTags->sous_div2_art_id =$lastArticleId;
          
          $articleTags->save(); 
        }
        
        return 'success';
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(SousDiv2Art $sousDiv2Art)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SousDiv2Art $sousDiv2Art)
    {
        //
        
        
        return view('Admin.Admindashboard.Province.DeuxiemeNiveau.articleDoc.edit',['data'=>$sousDiv2Art]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SousDiv2Art $sousDiv2Art)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SousDiv2Art $sousDiv2Art)
    {
        //
    }
}
