<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\About;
use App\Models\User;
use App\Models\Education;
use App\Models\Edition;
use App\Models\Experience;
use App\Models\Collaborate;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Phone;
use App\Models\Portfolio;
use App\Models\Link;
use App\Models\Title;

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

            $showUserdata = User::findOrFail(1);

            $activeEducations = Education::where("status_id",1)->get();

            $activeAbouts = About::all();

            $activeEditions = Edition::all();

            $activeSkills = Skill::where("status_id",1)->get();

            $activeServices = Service::where("status_id",1)->get();

            $activePhones = Phone::where("status_id",1)->get();

            $activePhone = Phone::where("status_id",1)->limit(1)->get();

            $activeLinks = Link::where("status_id",1)->get();

            $showActiveLinks = Link::where("status_id",1)->limit(3)->get();

            $activeExperiences = Experience::where("status_id",1)->orderBy("id","desc")->get();

            $activeCollaboraters = Collaborate::where("status_id",1)->orderBy("id","desc")->get();

            $activeProducts = Portfolio::where("status_id",1)->orderBy("id","desc")->limit(9)->get();

            $Abouts = Title::where("id",1)->get();
            $Educations = Title::where("id",2)->get();
            $Skills = Title::where("id",3)->get();
            $Experiences = Title::where("id",4)->get();
            $Services = Title::where("id",5)->get();
            $Collaborates = Title::where("id",6)->get();
            $Portfolios = Title::where("id",7)->get();


            $view->with("showUserdata",$showUserdata)->with("activeAbouts",$activeAbouts)->with("userdata",$userdata)->with("activeEditions",$activeEditions)->with("activeEducations",$activeEducations)->with("activeSkills", $activeSkills)->with("activeServices",$activeServices)->with("activePhones",$activePhones)->with("activeLinks",$activeLinks)->with("activeExperiences",$activeExperiences)->with("activeCollaboraters",$activeCollaboraters)->with("activeProducts",$activeProducts)->with("activePhone",$activePhone)->with("Abouts",$Abouts)->with("Educations", $Educations)->with("Skills",$Skills)->with("Experiences",$Experiences)->with("Services",$Services)->with("Collaborates",$Collaborates)->with("Portfolios",$Portfolios)->with("showActiveLinks",$showActiveLinks);
        });
    }
}
