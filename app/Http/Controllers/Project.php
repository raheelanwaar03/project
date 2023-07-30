<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentRequest;
use App\Models\WithdrawalRequest;
use App\Models\Packages;


class Project extends Controller
{


    public function  redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('user.home');
            } else {
                return  view('admin.home');
            }
        } else {
            return redirect()->back;
        }
    }
    public function index()
    {
        return view('user.home');
    }

    public function About()
    {
        return view('about');
    }
    public function Packages()
    {
        return view('packages');
    }
    public function Contact()
    {
        return view('contact');
    }
    public function Account(Request $id)
    {


        return view('account');
    }

    public function R()
    {
        return view('r');
    }
    public function PaymentRequest(Request $request)
    {
        $data = new PaymentRequest;
        $data->Full_Name = $request->name;
        $data->Email = $request->email;
        $data->Phone_No = $request->phone;
        $data->TRC20_ID = $request->payment_id;
        $data->Recharge_Amount = $request->Payment_Amount;
        if ($request->has('file')) {
            $image = $request['file'];
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data->Screen_shot = $imageName;
        }
        $data->Action = 'In Progress';
        if (Auth::check()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back();
    }
    public function WithdrawalRequest(Request $request)
    {

        if ($request->Withdrawal > auth()->user()->balance) {
            return redirect()->back()->with('error', 'you have not enough balance');
        }

        $data = new WithdrawalRequest;
        $data->Full_Name = $request->name;
        $data->Email =  $request->email;
        $data->withdrawal_Amount = $request->Withdrawal;
        $data->Action = 'In Progress';
        $data->TRC20_ID = $request->TRC20;
        $data->user_id = Auth::user()->id;
        $data->save();
        return redirect()->back();
    }
    public function Payment_User()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $Payment = Payment_Requests::where('user_id,$userid')->get();
            return view('admin.Payment_User', compact('Payment'));
        } else {
            return redirect()->back();
        }
    }
    public function PackageBuy(Request $request)
    {
        $data = new Packages;
        $data->Package_name = $request->Package_name;
        $data->Package_price = $request->price;
        $data->Package_Days = $request->Days;
        $data->Daily_income = $request->Daily_Income;
        $data->Daily_Withdrawal = $request->Minimum_Withdrawal;
        $data->Total_after_Package_end = $request->Total_After_180_Days;
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back();
    }
}
