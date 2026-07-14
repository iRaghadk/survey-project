<?php
 
use App\Http\Controllers\PreMeasureController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/pre-measure', function () {
    return view('pre_measure');
})->name('pre-measure');
 
Route::post('/pre-measure', [PreMeasureController::class, 'store'])->name('pre-measure.store');
