<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',  
        'slug', 
        'summary',
        'content', 
        'category_id', 
        'author_id', 
        'image',
        'status'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function commentsCount(){
        return $this->comments()->count();
    }
    public function author(){
        return $this->belongsTo(User::class);
    }
}
