<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Chart;
use App\Livewire\BudgetCall;
use App\Livewire\Settings;
use App\Livewire\ActivityJustification;
use App\Livewire\PersonnelServices;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chart', Chart::class);

Route::get('/budgetcall', BudgetCall::class);

Route::get('/settings', Settings::class);

Route::get('/activity-justification', ActivityJustification::class)->name('activity-justification');

Route::get('/personal-services', PersonnelServices::class)->name('personnel-services');

