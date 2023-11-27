<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Collaborate;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Phone;
use App\Models\Portfolio;
use App\Models\Link;

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

            $activeEducations = Education::where("status_id",1)->get();

            $activeSkills = Skill::where("status_id",1)->orderBy("id","desc")->limit(5)->get();

            $activeServices = Service::where("status_id",1)->get();

            $activePhones = Phone::where("status_id",1)->get();

            $activeLinks = Link::where("status_id",1)->get();

            $activeExperiences = Experience::where("status_id",1)->orderBy("id","desc")->limit(2)->get();

            $activeCollaboraters = Collaborate::where("status_id",1)->orderBy("id","desc")->limit(4)->get();

            $activeProducts = Portfolio::where("status_id",1)->orderBy("id","desc")->limit(6)->get();


            $view->with("userdata",$userdata)->with("activeEducations",$activeEducations)->with("activeSkills", $activeSkills)->with("activeServices",$activeServices)->with("activePhones",$activePhones)->with("activeLinks",$activeLinks)->with("activeExperiences",$activeExperiences)->with("activeCollaboraters",$activeCollaboraters)->with("activeProducts",$activeProducts);
        });
    }
}
