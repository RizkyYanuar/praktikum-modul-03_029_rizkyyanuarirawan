<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

// use Illuminate\Support\Facades\DB;
// use App\Models\Activity;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/activities/trash', [ActivityController::class, 'trash'])->name('activities.trash');
Route::patch('/activities/{id}/restore', [ActivityController::class, 'restore'])->name('activities.restore');
Route::patch('/activities/{activity}/publish', [ActivityController::class, 'publish'])->name('activities.publish');
Route::patch('/activities/{activity}/complete', [ActivityController::class, 'complete'])->name('activities.complete');
Route::resource('activities', ActivityController::class);
Route::resource('categories', CategoryController::class);
Route::resource('registrations', RegistrationController::class);


// Route::get('/eksperimen-n1', function () {
//     DB::enableQueryLog();
//     $lazyActivities = Activity::take(5)->get();
//     foreach ($lazyActivities as $activity) {
//         $activity->category?->name;
//     }
//     $queryTanpaEager = count(DB::getQueryLog());

//     DB::flushQueryLog();

//     DB::enableQueryLog();
//     $eagerActivities = Activity::with('category')->take(5)->get();
//     foreach ($eagerActivities as $activity) {
//         $activity->category?->name;
//     }
//     $queryDenganEager = count(DB::getQueryLog());

//     return "Jumlah Query Tanpa Eager Loading: " . $queryTanpaEager . "<br>" .
//         "Jumlah Query Dengan Eager Loading: " . $queryDenganEager;
// });
