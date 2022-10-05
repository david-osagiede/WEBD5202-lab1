<?php

namespace App\Models;


class Post extends Model
{
        // protected $fillable = ['title', 'body']; //whats allowed
        // protected $guarded = []; //whats not allowed
        // public function comments()
        //     {
        //        return $this->hasMany(Comment::class);
        //     }
        public function comments()
        {
            // return $this->belongsTo(Post::class);
            return $this->hasMany(Comment::class);
        }
        public function addComment($body)
        {

            // Comment::create([

            //     'body' => $body,
            //     'post_id' => $post_id
            // ]);
         $this->comments()->create(compact('body'));
}
}
