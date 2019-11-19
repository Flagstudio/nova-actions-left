<?php

namespace Flagstudio\NovaActionsLeft;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class NovaActionsLeftServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-actions-left', __DIR__ . '/../dist/js/tool.js');
        });
    }
}
