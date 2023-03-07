<?php

namespace Database\Seeders;

use App\Models\link as ModelsLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class Link extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $routeCollection = Route::getRoutes();

        foreach ($routeCollection as $Route) {
            $data []=[
                'methods' => $Route->methods()[0],
                'uri' => $Route->uri(),
                'name' => $Route->getName(),
                'actionname' => $Route->getActionName(),
                'created_at' => now()->toDateString(),
                'updated_at' => now()->toDateString()
            ];
            
        }
        $chucks = array_chunk($data, 5000);
        foreach ( $chucks as $chunk ){
            ModelsLink::insert($chunk);
        }
    }
}
