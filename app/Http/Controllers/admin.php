<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\PaymentRequest;
use App\Models\WithdrawalRequest;
use App\Models\User;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function addview()
    {
        $data = PaymentRequest::all();

        return view('admin.Payment_User', compact('data'));
    }
    public function addview1()
    {
        $data = WithdrawalRequest::all();

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
        $user = User::where('id',$userId)->first();
        $user->balance += $amount;
        $user->save();
        // 25% of amount
        $commission = $amount * 25 / 100;
        //  checking if user have upliner
        $upliner = User::where('name',$user->referral)->first();
        if($upliner != '')
        {
            $upliner->balance = $commission;
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

        $user = User::where('id',$user_id)->first();
        $user->balance -= $amount;
        $user->save();
        return redirect()->back()->with('success','user widthrawal approved');

    }

    public function rejecteWidthraw($id)
    {
        $payment = WithdrawalRequest::find($id);
        $payment->Action = 'Rejected';
        $payment->save();
        return redirect()->back()->with('success','user widthrawal rejected');

    }


}
