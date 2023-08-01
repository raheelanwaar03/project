<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project;
use App\Http\Controllers\admin;

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

Route::get('/', [Project::class, 'index']);

Route::get('/home', [Project::class, 'redirect'])->name('Home')->middleware('admin');
Route::get('about', [Project::class, 'About'])->middleware('admin');
Route::get('packages', [Project::class, 'Packages'])->middleware('admin');
Route::get('contact', [Project::class, 'Contact'])->middleware('admin');
Route::get('account', [Project::class, 'Account'])->middleware('admin');
Route::get('r', [Project::class, 'R'])->middleware('admin');
Route::get('accept', [Project::class, 'accept'])->middleware('admin');
Route::get('reject', [Project::class, 'reject'])->middleware('admin');
Route::get('Account', 'Project@Account')->middleware('admin');

Route::Post('PackagesBuy', [Project::class, 'PackageBuy'])->middleware('admin');

Route::post('PaymentRequest', [Project::class, 'PaymentRequest'])->middleware('admin');
Route::post('WithdrawalRequest', [project::class, 'WithdrawalRequest'])->middleware('admin');


Route::get('Payment_User', [admin::class, 'addview'])->name('Admin.Users')->middleware('admin');
Route::get('Withdrawal_User', [admin::class, 'addview1'])->middleware('admin');

Route::get('Total_User', [admin::class, 'addview2'])->middleware('admin');

Route::get('/approved/{id}', [admin::class, 'approved'])->name('Admin.Approve.Payment')->middleware('admin');
Route::get('/rejected/{id}', [admin::class, 'rejected'])->name('Admin.Rejected.Payment')->middleware('admin');
Route::get('/approve/widthraw/{id}', [admin::class, 'approveWidthraw'])->name('Admin.Approve.Widthraw')->middleware('admin');
Route::get('/reject/widthraw/{id}', [admin::class, 'rejecteWidthraw'])->name('Admin.Reject.Widthraw')->middleware('admin');
// giving all users thier daily profit
Route::get('/daily-Profit', [admin::class, 'dailyProfit'])->name('Admin.Daily.Profit')->middleware('admin');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
