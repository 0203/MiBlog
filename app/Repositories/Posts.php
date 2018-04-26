<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/25/2018
 * Time: 2:20 AM
 */

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts

{

    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    //Dependency Injection means passing arguments to a function
    //will use this all() to the function in controller
    //refer HomeController@index
    public function all()
    {

        return Post::all();
    }

    public function find()
    {

    }

}