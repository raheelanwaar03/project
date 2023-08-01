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

Route::get('/home', [Project::class, 'redirect'])->name('Home')->middleware('admin','user');
Route::get('about', [Project::class, 'About'])->middleware('admin','user');
Route::get('packages', [Project::class, 'Packages'])->middleware('admin','user');
Route::get('contact', [Project::class, 'Contact'])->middleware('admin','user');
Route::get('account', [Project::class, 'Account'])->middleware('admin','user');
Route::get('r', [Project::class, 'R'])->middleware('admin','user');
Route::get('accept', [Project::class, 'accept'])->middleware('admin','user');
Route::get('reject', [Project::class, 'reject'])->middleware('admin','user');
Route::get('Account', 'Project@Account')->middleware('admin','user');

Route::Post('PackagesBuy', [Project::class, 'PackageBuy'])->middleware('admin','user');

Route::post('PaymentRequest', [Project::class, 'PaymentRequest'])->middleware('admin','user');
Route::post('WithdrawalRequest', [project::class, 'WithdrawalRequest'])->middleware('admin','user');


Route::get('Payment_User', [admin::class, 'addview'])->name('Admin.Users')->middleware('admin','user');
Route::get('Withdrawal_User', [admin::class, 'addview1'])->middleware('admin','user');

Route::get('Total_User', [admin::class, 'addview2'])->middleware('admin','user');

Route::get('/approved/{id}', [admin::class, 'approved'])->name('Admin.Approve.Payment')->middleware('admin','user');
Route::get('/rejected/{id}', [admin::class, 'rejected'])->name('Admin.Rejected.Payment')->middleware('admin','user');
Route::get('/approve/widthraw/{id}', [admin::class, 'approveWidthraw'])->name('Admin.Approve.Widthraw')->middleware('admin','user');
Route::get('/reject/widthraw/{id}', [admin::class, 'rejecteWidthraw'])->name('Admin.Reject.Widthraw')->middleware('admin','user');
// giving all users thier daily profit
Route::get('/daily-Profit', [admin::class, 'dailyProfit'])->name('Admin.Daily.Profit')->middleware('admin','user');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
