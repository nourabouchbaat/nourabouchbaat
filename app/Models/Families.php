<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Families extends Model
{
    protected $table = 'families';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle_fr',
        'libelle_ar',
        'show',
        'icon',
        'photo_menu'
    ];
    public function categories() {
        return Categories::where('id_families', $this->id)->get();
    }
}