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

Route::get('/home', [Project::class, 'redirect']);
Route::get('about', [Project::class, 'About']);
Route::get('packages', [Project::class, 'Packages']);
Route::get('contact', [Project::class, 'Contact']);
Route::get('account', [Project::class, 'Account']);
Route::get('r', [Project::class, 'R']);
Route::get('accept', [Project::class, 'accept']);
Route::get('reject', [Project::class, 'reject']);
Route::get('Account', 'Project@Account');

Route::Post('PackagesBuy', [Project::class, 'PackageBuy']);

Route::post('PaymentRequest', [Project::class, 'PaymentRequest']);
Route::post('WithdrawalRequest', [project::class, 'WithdrawalRequest']);

Route::get('Payment_User', [admin::class, 'addview']);
Route::get('Withdrawal_User', [admin::class, 'addview1']);

Route::get('Total_User', [admin::class, 'addview2']);

Route::get('/approved/{id}', [admin::class, 'approved'])->name('Admin.Approve.Payment');
Route::get('/rejected/{id}', [admin::class, 'rejected'])->name('Admin.Rejected.Payment');
Route::get('/approve/widthraw/{id}', [admin::class, 'approveWidthraw'])->name('Admin.Approve.Widthraw');
Route::get('/reject/widthraw/{id}', [admin::class, 'rejecteWidthraw'])->name('Admin.Reject.Widthraw');
// giving all users thier daily profit
Route::get('/daily-Profit',[admin::class,'dailyProfit'])->name('Admin.Daily.Profit');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
