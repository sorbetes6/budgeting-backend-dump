<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Chart;
use App\Livewire\Settings;
use App\Livewire\ActivityJustification;
use App\Livewire\PersonalServices;
use App\Livewire\PersonnelSchedule;
use App\Livewire\Mooe;
use App\Livewire\CapitalOutlay;
use App\Livewire\PPMP;
use App\Livewire\BudgetCall;
use App\Livewire\BUR;


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

Route::get('/settings', Settings::class);

Route::get('/activity-justification', ActivityJustification::class);

Route::get('/personal-services', PersonalServices::class);

Route::get('/personnel-schedule', PersonnelSchedule::class);

Route::get('/MOOE', Mooe::class);

Route::get('/capital-outlay', CapitalOutlay::class);

Route::get('/PPMP', PPMP::class);

Route::get('/budgetcall', BudgetCall::class);

Route::get('BUR', BUR::class);