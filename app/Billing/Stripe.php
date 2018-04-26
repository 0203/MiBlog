<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/25/2018
 * Time: 3:01 AM
 */

namespace App\Billing;


class Stripe
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

}