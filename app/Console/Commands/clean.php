<?php

namespace App\Console\Commands;

use App\Models\Packages;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->referral = 'default';
        $user->balance = 100;
        $user->usertype = 'admin';
        $user->password = Hash::make('asdfasdf');
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->referral = 'default';
        $user->usertype = 'user';
        $user->balance = 100;
        $user->password = Hash::make('asdfasdf');
        $user->save();
        // Adding Plans



         return 'SUCCESS';
    }
}
