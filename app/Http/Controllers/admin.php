<?php

namespace App\Http\Controllers;
use App\Models\PaymentRequest;
use App\Models\WithdrawalRequest;
use App\Models\User;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function addview()
    {
        $data= PaymentRequest::all();
        
    return view('admin.Payment_User',compact('data'));
    }
    public function addview1()
    {
        $data= WithdrawalRequest::all();

    return view('admin.Withdrawal_User',compact('data'));
    }
    public function addview2()
    {
        $data= User::all();
    return view('admin.Total_User',compact('data'));
    }
    
    public function Buy(){

            $data= packages::all();
      
        return view('admin.PackagesBuy', compact("data"));
    }
//     public function approved($id){

//         $data=  new PaymentRequest::Find($id);
//         $data->Action='Approved';
//         $data->save();
  
//     return redirect()->back;
// }
}
