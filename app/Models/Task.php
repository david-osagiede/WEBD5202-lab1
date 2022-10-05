<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // public function isComplete()
    // {
    //     // return false;
    // }
        // public static function incomplete() //Task::incomplete()
        // ($query, $val) Task::incomplete('fas')
           public function scopeIncomplete($query)
        {
            //return static::where('completed', 0)->get();
            return $query->where('completed', 0);
        }
}
