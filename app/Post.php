<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body','user_id',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){

        return $this->belongsTo(User::class);

    }

    public static function archives(){

    return static:: selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')

    ->groupBy('year','month')
    ->orderByRaw('min(created_at)desc')
    ->get()
    ->toArray();
}

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
