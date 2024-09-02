<?php

namespace App\Models\AdminModel\MiscDoc\OntActu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OntActuArt extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','iconPath','auser_id','adress','qr_code','content_switcher','publish_date'];
}
