<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function katalog_category(){
        return $this->belongsTo(KatalogCategory::class, 'katalog_category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post_user(){
        return $this->belongsTo(User::class, 'post_user_id');
    }

    public function approve_user(){
        return $this->belongsTo(User::class, 'approve_user_id');
    }
}
