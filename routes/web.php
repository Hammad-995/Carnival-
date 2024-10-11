<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\IndustriesController;
use App\Http\Controllers\Web\BroadcastingController;
use App\Http\Controllers\Web\ClientsController;
use App\Http\Controllers\Web\CustomerCareController;
use App\Http\Controllers\Web\CustomerServiceController;
use App\Http\Controllers\Web\GeoTrackingController;
use App\Http\Controllers\Web\JobSeekerController;
use App\Http\Controllers\Web\JobTrackingController;
use App\Http\Controllers\Web\SentContractsController;
use App\Http\Controllers\Web\SoundManagerController;
use App\Http\Controllers\Web\SupportController;
use App\Http\Controllers\Web\TerminalController;
use App\Http\Controllers\Web\TermsConditionController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');

Route::get('/industries', [IndustriesController::class, 'index'])->name('industries.index');
Route::get('/industries/show', [IndustriesController::class, 'show'])->name('industries.show');
Route::get('/industries/post', [IndustriesController::class, 'post'])->name('industries.post');
Route::delete('/industries/delete', [IndustriesController::class, 'delete'])->name('industries.delete');
Route::get('/industries/create', [IndustriesController::class, 'create'])->name('industries.create');
Route::post('/industries/create', [IndustriesController::class, 'store'])->name(name: 'industries.store');


Route::get('/broadcasting', [BroadcastingController::class, 'index'])->name('broadcasting.index');
Route::get('/broadcasting/create', [BroadcastingController::class, 'create'])->name('broadcasting.create');
Route::post('/broadcasting/create', [BroadcastingController::class, 'store'])->name('broadcasting.store');

Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');

Route::get('/customer-care', [CustomerCareController::class, 'index'])->name('customer-care.index');

Route::get('/customer-service', [CustomerServiceController::class, 'index'])->name('customer-service.index');

Route::get('/geo-tracking', [GeoTrackingController::class, 'index'])->name('geo-tracking.index');

Route::get('/job-seeker', [JobSeekerController::class, 'index'])->name('job-seeker.index');

Route::get('/job-tracking', [JobTrackingController::class, 'index'])->name('job-tracking.index');

Route::get('/sent-contracts', [SentContractsController::class, 'index'])->name('sent-contracts.index');

Route::get('/sound-manager', [SoundManagerController::class, 'index'])->name('sound-manager.index');

Route::get('/support', [SupportController::class, 'index'])->name('support.index');

Route::get('/terminal', [TerminalController::class, 'index'])->name('terminal.index');
Route::post('/terminal' , [TerminalController::class, 'store'])->name('terminal.store');

Route::get('/terms-conditions', [TermsConditionController::class, 'index'])->name('terms-conditions.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
