<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Contact;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $Contact = Contact::find(1);
        View::share('Contact', $Contact);
    }
}
