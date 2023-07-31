<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\PaymentRequest;
use App\Models\WithdrawalRequest;
use App\Models\DailyProfit;
use App\Models\User;
use Carbon\Carbon;

class admin extends Controller
{
    public function addview()
    {
        $data = PaymentRequest::get();
        return view('admin.Payment_User', compact('data'));
    }
    public function addview1()
    {
        $data = WithdrawalRequest::get();

        return view('admin.Withdrawal_User', compact('data'));
    }
    public function addview2()
    {
        $data = User::all();
        return view('admin.Total_User', compact('data'));
    }

    public function Buy()
    {
        $data = Packages::all();
        return view('admin.PackagesBuy', compact("data"));
    }
    public function approved($id)
    {

        $data = PaymentRequest::find($id);
        $data->Action = 'Approved';
        $data->save();
        // getting data for adding user balance
        $amount = $data->Recharge_Amount;
        $userId = $data->user_id;
        // adding amount to user balance
        $user = User::where('id', $userId)->first();
        $user->balance += $amount;
        $user->save();
        // 25% of amount
        $commission = $amount * 25 / 100;
        //  checking if user have upliner
        $upliner = User::where('name', $user->referral)->first();
        if ($upliner != '') {
            $upliner->balance += $commission;
            $upliner->save();
        }


        return redirect()->back();
    }

    public function rejected($id)
    {
        $data = PaymentRequest::find($id);
        $data->Action = 'Rejected';
        $data->save();
    }

    public function approveWidthraw($id)
    {
        $payment = WithdrawalRequest::find($id);
        $payment->Action = 'Approved';
        $payment->save();
        $amount = $payment->withdrawal_Amount;
        $user_id = $payment->user_id;
        // deducting amount from user account

        $user = User::where('id', $user_id)->first();
        $user->balance -= $amount;
        $user->save();
        return redirect()->back()->with('success', 'user widthrawal approved');
    }

    public function rejecteWidthraw($id)
    {
        $payment = WithdrawalRequest::find($id);
        $payment->Action = 'Rejected';
        $payment->save();
        return redirect()->back()->with('success', 'user widthrawal rejected');
    }

    public function dailyProfit()
    {
        $packages = Packages::get();

        foreach ($packages as $data) {
            // checking if user get daily profit already
            $dailyProfit = DailyProfit::where('user_id',$data->user_id)->where('created_at',today());
            if($dailyProfit == '')
            {
                // getting user buy package details
                $validPackage = Packages::where('user_id',$data->user_id)->where('created_at', '>' , Carbon::today()->subDays(180) );
                // giving user daily profit
                if($validPackage != '')
                {
                    $user = User::where('id', $data->user_id)->first();
                    $user->balance += $data->Daily_income;
                    $user->save();

                    // adding user daily income in database
                    $daily_profit = new DailyProfit();
                    $daily_profit->user_id = $data->user_id;
                    $daily_profit->amount = $data->Daily_income;
                    $daily_profit->action = 'Daily Profit';
                    $daily_profit->save();
                }

            }




        }

        return redirect()->back()->with('success', 'Daily Profit Given To All Users');
    }
}
