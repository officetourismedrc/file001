<?php

namespace App\Models\AdminModel\DeuxniveauDoc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sd2imageArt extends Model
{
    use HasFactory;
    
    protected $fillable = ['ont_actu_img_id','sous_div2_art_id','ontartimg_cat_id'];
}
