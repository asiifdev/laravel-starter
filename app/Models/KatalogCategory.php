<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function katalog(){
        return $this->hasMany(Katalog::class, 'katalog_category_id');
    }
}
