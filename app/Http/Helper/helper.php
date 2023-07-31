<?php

use App\Models\DailyProfit;

function dailyProfit()
{
    $dailyProfit = DailyProfit::where('user_id',auth()->user()->id)->get();

    $totalProfit = 0;

    foreach($dailyProfit as $data)
    {
        $totalProfit += $data->amount;
    }

    return $totalProfit;


}
