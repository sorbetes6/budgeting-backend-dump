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
use App\Livewire\PurchaseOrder;
use App\Livewire\Amendment;
use App\Livewire\BurForm;
use App\Livewire\PurchaseForm;
use App\Livewire\AmendmentForm;
use App\Livewire\Appropriations;
use App\Http\Controllers\CapitalOutlayController;


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

Route::get('/BUR', BUR::class);

Route::get('/purchase-order', PurchaseOrder::class);

Route::get('/appropriations', Appropriations::class);

Route::get('/amendment', Amendment::class);

Route::get('/BUR-form', BurForm::class);

Route::get('/purchase-order-form', PurchaseForm::class);

Route::get('/amendment-form', AmendmentForm::class);

Route::post('/capital-outlay/store', [CapitalOutlayController::class, 'store'])->name('capital-outlay.store');