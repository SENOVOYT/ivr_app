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
        $user = User::create([
            'name' => 'SuperUser',
            'email' => 'superuser@gmail.com',
            'email_verified_at' => $current_date_time,
            'password' => Hash::make('superuser@gmail.com'),
            'user_rested_by_admin' =>$current_date_time,
        ])->assignRole('superuser');
        
        User::create([
            'name' => 'supervisor',
            'email' => 'supervisor@gmail.com',
            'email_verified_at' => $current_date_time,
            'password' => Hash::make('supervisor@gmail.com'),
            'user_rested_by_admin' =>$current_date_time,
        ])->assignRole('supervisor');
    }
}
