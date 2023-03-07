<?php

namespace Database\Seeders;

use App\Models\LinkType as ModelsLinkType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ModelsLinkType::create([
            'type' => 'menu'
        ]);
        ModelsLinkType::create([
            'type' => 'link'
        ]);
        
    }
}
