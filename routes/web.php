<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowDashboardController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ServicesController;


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

// Route::get('/dashboards', function () {
//     return view('dashboards/index');
// })->middleware(['auth', 'verified'])->name('dashboards');

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

});

require __DIR__.'/auth.php';

