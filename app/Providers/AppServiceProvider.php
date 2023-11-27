<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Phone;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer("*",function($view){

            $userdata = Auth::user();
            $educations = Education::all();
            $skills = Skill::all();
            $services = Service::all();
            $phones = Phone::all();

            $view->with("userdata",$userdata)->with("educations",$educations)->with("skills", $skills)->with("services",$services)->with("phones",$phones);

        });
    }
}
