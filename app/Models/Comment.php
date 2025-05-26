<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'post_id', 'user_id'];

    //mỗi bình luận thuộc về 1 người dùng, thông qua user_id
    public function user() {
        return $this->belongsTo(User::class);
    }
    //mỗi bình luận thuộc về 1 bài viết
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
