<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "content", "category_id"];
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
