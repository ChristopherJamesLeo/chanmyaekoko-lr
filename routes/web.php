<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AboutController;
use App\Http\Controllers\CollaboratesController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EditionsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\MainPortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowDashboardController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\TitlesController;
use App\Http\Controllers\VideosController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// show index main page
Route::get('/', function () {
    return view('main/index');
})->name("main.index");

// Route::get('/dashboard', function () {
//     return view('/main.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

// main portfolio
Route::resource("/mainportfolio",MainPortfolioController::class);

Route::middleware('auth')->group(function () {

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/dashboards",[DashboardController::class,"index"]);
    Route::get("/maindashboards",[ShowDashboardController::class,"index"]);
    Route::resource("/abouts",AboutController::class);
    Route::resource("/educations",EducationController::class);
    Route::resource("/skills",SkillsController::class);
    Route::resource("/experiences",ExperiencesController::class);
    Route::resource("/services",ServicesController::class);
    Route::resource("/editions",EditionsController::class);
    Route::resource("/collaborates",CollaboratesController::class);
    Route::resource("/portfolios",PortfoliosController::class);
    Route::resource("/profiles",ProfilesController::class);
    Route::put("/profilesimages/{id}",[ProfileImageController::class,"update"])->name("profileimage.upload");
    Route::put("/images/{id}",[ImagesController::class,"update"])->name("images.update");
    Route::delete("/images/{id}",[ImagesController::class,"destroy"])->name("images.destroy");
    Route::put("/videos/{id}",[VideosController::class,"update"])->name("videos.update");
    Route::delete("/videos/{id}",[VideosController::class,"destroy"])->name("videos.destroy");
    Route::resource("/logins",LoginController::class);
    Route::resource("/links",LinksController::class);
    Route::resource("/phones",PhonesController::class);
    Route::resource("/types",TypesController::class);
    Route::resource("/titles",TitlesController::class);
    Route::resource("/statuses",StatusesController::class);

});

require __DIR__.'/auth.php';

