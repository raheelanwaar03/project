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

Route::get('/home', [Project::class, 'redirect'])->name('Home');
Route::get('about', [Project::class, 'About']);
Route::get('packages', [Project::class, 'Packages']);
Route::get('contact', [Project::class, 'Contact']);
Route::get('account', [Project::class, 'Account'])->middleware('user');
Route::get('r', [Project::class, 'R'])->middleware('user');
Route::get('accept', [Project::class, 'accept'])->middleware('user');
Route::get('reject', [Project::class, 'reject'])->middleware('user');
Route::get('Account', 'Project@Account')->middleware('user');

Route::Post('PackagesBuy', [Project::class, 'PackageBuy'])->middleware('user');

Route::post('PaymentRequest', [Project::class, 'PaymentRequest'])->middleware('user');
Route::post('WithdrawalRequest', [project::class, 'WithdrawalRequest'])->middleware('user');


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
