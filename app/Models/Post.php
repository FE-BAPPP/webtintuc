<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'sub_title',
    'thumbnail',
    'body',
    'user_id',
    'category_id'
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //mỗi bài viết thuộc về 1 danh mục, qua category_id
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //1 bài viết có thể có nhiều comment
    public function comments() {
        return $this->hasMany(Comment::class);
    }

}