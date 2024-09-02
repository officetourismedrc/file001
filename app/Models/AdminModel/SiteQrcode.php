<?php

namespace App\Models\AdminModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteQrcode extends Model
{
    use HasFactory;
    
    protected $fillable = ['path','description'];
}
