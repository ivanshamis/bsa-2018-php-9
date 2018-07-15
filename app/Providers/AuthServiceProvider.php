<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Currency' => 'App\Policies\CurrencyPolicy',
    ];

    
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('currency.update', 'App\Policies\CurrencyPolicy@update');
        Gate::define('currency.delete', 'App\Policies\CurrencyPolicy@delete');
        Gate::define('currency.create', 'App\Policies\CurrencyPolicy@create');
    }
}
