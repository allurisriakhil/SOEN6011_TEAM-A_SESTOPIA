<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['layouts.partials.navbar', 'skills.index'],
            'App\Http\View\Composers\SkillsComposer'
        );

        View::composer(
            ['skills.show'],
            'App\Http\View\Composers\TableOfContentComposer'
        );
    }
}
