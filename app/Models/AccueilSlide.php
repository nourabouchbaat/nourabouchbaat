<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccueilSlide extends Model
{
    protected $table = 'accueil_slide';
    public $primarykey = 'id';
    protected $fillable = [
        'bold_text',
        'title',
        'description',
        'id_families',
        'photo'
    ];
    
}