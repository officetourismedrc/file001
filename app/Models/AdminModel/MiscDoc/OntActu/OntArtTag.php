<?php

namespace App\Models\AdminModel\MiscDoc\OntActu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OntArtTag extends Model
{
    use HasFactory;
    
    protected $fillable = ['site_tag_id','ont_actu_art_id'];
}
