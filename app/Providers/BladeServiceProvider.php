<?php

namespace App\Providers;

use App\Models\Role;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    //    Blade::if('hasrole', function($expressiom){

    //     if(Auth::user()){
    //         if(Admin::user()->hasRole($expressiom)){
    //             return true;
    //         }
    //     }
    //     return false;
    //    });
    }
}

