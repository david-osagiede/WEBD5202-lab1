<?php

namespace App\Models;

use Carbon\Carbon;
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
        public function user() // $comment->$post->user->name
        {
            return $this->belongsTo(User::class);
        }
        public function addComment($body)
        {

            // Comment::create([

            //     'body' => $body,
            //     'post_id' => $post_id
            // ]);
         $this->comments()->create(compact('body'));
        }

        public function scopefilter($query, $filters)
        {
        if ($month = $filters['month'] ?? false) {
    // $posts->whereMonth('created_at', $month);
         $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year'] ?? false) {
        $query->whereYear('created_at', $year);
        }
        }
        public static function archives()
        {
            return static::selectRaw(' year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderbyRaw('min(created_at) desc')
            ->get()
            ->toArray();

        }
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }
}
