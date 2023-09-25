<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $casts = [
    //     'tags' => "array"
    // ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function blog_category(){
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function comment(){
        return $this->hasMany(BlogComment::class, 'blog_id');
    }
}
