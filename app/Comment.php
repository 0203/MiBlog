<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function posts(){

        return $this->belongsTo(Post::class);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }

    protected $fillable = [
        'post_id', 'body',
    ];


}
