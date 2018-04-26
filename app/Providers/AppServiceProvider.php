<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function($view){

            $view->with('archives', \App\Post::archives());
            $view->with('tags', \App\Tag::pluck('name'));

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //services container->allow to register any key in a container and associate that with some value
        //singleton will create a single instances of the class
        \App::singleton(Stripe::class, function(){
                return new Stripe(config('services.stripe.secret')) ;
        });

    }
}
