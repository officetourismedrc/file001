<?php

namespace App\Models\AdminModel\DeuxniveauDoc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousDiv2Art extends Model
{
    use HasFactory;
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'deuxniveau_id',
        'title',
        'iconPath',
        'auser_id',
        'articlecatg_id',
        'adress',
        'qr_code',
        'priority',
        'content_switcher',
    ];

    
    
}
