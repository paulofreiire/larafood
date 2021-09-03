<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\PlanControlller as PlanController;

Route::get('admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');
Route::get('admin/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('admin/plans/store', [PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');


Route::get('/', function () {
    return view('welcome');
});
