<?php

namespace App\Models\AdminModel\MiscDoc\OntActu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OntActuImgJoin extends Model
{
    use HasFactory;
    
    protected $fillable = ['ont_actu_img_id','ont_actu_art_id','ontartimg_cat_id'];
}
