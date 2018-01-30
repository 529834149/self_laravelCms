<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
//		\App\Models\User::observe(\App\Observers\UserObserver::class);
//		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);
//		\App\Models\Project::observe(\App\Observers\ProjectObserver::class);
//
//        \Carbon\Carbon::setLocale('zh');
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
