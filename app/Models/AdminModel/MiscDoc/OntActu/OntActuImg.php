<?php

namespace App\Models\AdminModel\MiscDoc\OntActu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OntActuImg extends Model
{
    use HasFactory;
    
    protected $fillable = ['img_path','title ','desc','author '];
}
