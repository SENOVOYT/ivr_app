<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Development\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsSeeder::class);
        $this->call(SuperUserSeeder::class);
        $this->call(icons::class);
        $this->call(UserSeeder::class);
        $this->call(Link::class);
        $this->call(LinkType::class);
    }
}
