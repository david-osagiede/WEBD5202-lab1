<?php

namespace App\Providers;

use App\Billing\Stripe;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function ($view) {
               $view->with('archives', \App\Models\Post::archives());
               $view->with('tags', \App\Models\Tag::pluck('name'));
        });

    }
     /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // \App::singleton('App\Billing\Stripe', function () {
        //     return new \App\Billing\Stripe(config('services.stripe.secret'));
        // });
        // $this->app->singleton('App\Billing\Stripe', function () {
        //     return new \App\Billing\Stripe(config('services.stripe.secret'));
        // });
        $this->app->singleton(stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });
        // $this->app->singleton(stripe::class, function ($app) {
        //     $app-make('');
        //     return new Stripe(config('services.stripe.secret'));
        // });

    }
}
