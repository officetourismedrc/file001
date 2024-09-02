<?php

namespace App\Models\AdminModel\DeuxniveauDoc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sd2artTags extends Model
{
    use HasFactory;
    
    protected $fillable = ['site_tag_id','sous_div2_art_id'];
    
}
