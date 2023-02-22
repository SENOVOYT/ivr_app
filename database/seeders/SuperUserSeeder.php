<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        User::create([
            'user_name' => 'superuser',
            'first_name' =>'superuser',
            'middle_name' => 'superuser',
            'last_name' => 'superuser',
            'email' => 'superuser@gmail.com',
            'email_verified_at' => $current_date_time,
            'password' => Hash::make('superuser@gmail.com'),
            'user_rested_by_admin' =>$current_date_time,
        ])->assignRole('superuser');
        
        User::create([
            'user_name' => 'supervisor',
            'first_name' =>'supervisor',
            'middle_name' => 'supervisor',
            'last_name' => 'supervisor',
            'email' => 'supervisor@gmail.com',
            'email_verified_at' => $current_date_time,
            'password' => Hash::make('supervisor@gmail.com'),
            'user_rested_by_admin' =>$current_date_time,
        ])->assignRole('supervisor');
    }
}
