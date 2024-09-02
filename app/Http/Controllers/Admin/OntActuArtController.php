<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


use App\Models\AdminModel\MiscDoc\OntActu\OntActuArt;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\AdminModel\Articlecatgs;
use App\Models\AdminModel\SiteTag;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuImg;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuImgJoin;
use App\Models\AdminModel\MiscDoc\OntActu\OntArtTag;



class OntActuArtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
      
        $data = OntActuArt::paginate(5);
                           
        return view('Admin.Admindashboard.miscArticle.ontArticle.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        $data["articlecatg"] = Articlecatgs::all();
        $data["articleTag"] = SiteTag::all();
        //return $data;
        
        return view('Admin.Admindashboard.miscArticle.ontArticle.create',["data"=>$data]);
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $files = Storage::disk('public')->files('article/miscellaneous/ontArticle/art000');
        //return $files[1];
        $directories = Storage::disk('public')->directories('article/miscellaneous/ontArticle');
        
        Storage::disk('public')->makeDirectory('article/miscellaneous/ontArticle/art0'.count($directories));
        
            Storage::disk('public')->copy($files[0], 'article/miscellaneous/ontArticle/art0'.count($directories).'/index.blade.php');
            Storage::disk('public')->copy($files[1], 'article/miscellaneous/ontArticle/art0'.count($directories).'/slider.blade.php');
        
        
        
        return count($directories);
        
        //return var_dump($request->tags);
      
         $validated = $request->validate([
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
            'publishDate'=> 'required|date',
            
        ]);
        
        //return $validated;
         $iconpathSlider = 'images';
        
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
        $ontArticle = new OntActuArt();
        $ontArticle->title = $validated['title'];
        $ontArticle->iconPath = $iconPath_img;
        $ontArticle->auser_id = Auth::id();
        //$ontArticle->articlecatg_id = $validated['articleCategory'];
        $ontArticle->adress = 'Province'.'province_name'.'sous-division-name'.'index'; //create the folder and place the files
        $ontArticle->qr_code = 'no_data';
        //$ontArticle->priority = $validated['priority'];
        if($validated['contentSwitcher'] == 'true')
        $ontArticle->content_switcher = true;
        else
        $ontArticle->content_switcher = false;
        //$ontArticle->clicks = 0;
        $ontArticle->publish_date = $validated['publishDate'];
        
        $ontArticle->save();
       
       $lastArticleId = $ontArticle->id;
       
       //image slider
       
       foreach($bannerA as $item){
           
           $imageSliderData = new OntActuImg();
           $imageSliderData->img_path = $item;
           $imageSliderData->title = 'no_entry';
           $imageSliderData->desc = 'no_entry';
           $imageSliderData->author = 'not_specified';
           
           $imageSliderData->save();
           $imageSlider = $imageSliderData->id;
           
           $imageJoin = new OntActuImgJoin();
           
           $imageJoin->ont_actu_img_id = $imageSlider;
           $imageJoin->ont_actu_art_id = $lastArticleId;
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
           
           $imageJoin = new OntActuImgJoin();
           $imageJoin->ont_actu_img_id = $imageTitle;
           $imageJoin->ont_actu_art_id = $lastArticleId;
           $imageJoin->ontartimg_cat_id = 4;
           
           $imageJoin->save();
           
           //image icon is directly save in the article table
           
           ///////////////////////////////////////////////
        //////////////////////////////////////////////////////
        
        //tags are saved here
        
        foreach($validated['tags'] as $item){
        
        $articleTags = new OntArtTag();
        
          $articleTags->site_tag_id =$item;
          $articleTags->ont_actu_art_id =$lastArticleId;
          
          $articleTags->save(); 
        }
        
        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(OntActuArt $ontActuArt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OntActuArt $ontActuArt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OntActuArt $ontActuArt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OntActuArt $ontActuArt)
    {
        //
    }
}
