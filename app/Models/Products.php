<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public $primarykey = 'id';
    protected $fillable = [
        'id_categories' ,
        'keys' ,
        'libelle_fr' ,
        'comment_fr' ,
        'description_fr' ,
        'composants_fr' ,
        'conseils_fr' ,
        'prix_achat' ,
        'prix_vente' ,
        'qte' ,
        'libelle_ar' ,
        'comment_ar' ,
        'description_ar' ,
        'composants_ar' ,
        'big_photo' ,
        'small_photo' ,
        'cc' ,
        'published' 
    ];
    public function category() {
        return Categories::find($this->id_categories);
    }
    public function family() {
        return Families::find($this->category()->id);
    }

}