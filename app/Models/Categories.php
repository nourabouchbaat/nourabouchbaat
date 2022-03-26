<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Products;
class Categories extends Model
{
    protected $table = 'categories';
    public $primarykey = 'id';
    protected $fillable = [
        'id_families',
        'libelle_fr',
        'libelle_ar',
        'descritpion_fr',
        'descritpion_ar',
        'photo',
    ];
    public function family() {
        return Families::find($this->id_families);
    }
    public function products() {
        return Products::where('id_categories',$this->id);
    }
}