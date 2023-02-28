<?php

namespace Database\Seeders;

use App\Models\icons as ModelsIcons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class icons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [];
        $publicsvg = public_path('vendor/svg');
        $scan=scandir( $publicsvg );
        foreach($scan as $dir) {
            $img=scandir($publicsvg.'/'.$dir);
            foreach($img as $images) {
                if(!is_dir("vendor/svg/$dir/$images")&&"vendor/svg/$dir/$images"!= '.'&&"vendor/svg/$dir/$images"!='..'&&str_contains($images, ".svg") ) {
                   
                    
                $data []=[
                    'icon_name' => str_replace('.svg','',$images),
                    'icon_path' => "vendor/svg/$dir/$images",
                    'created_at' => now()->toDateString(),
                    'updated_at' => now()->toDateString()
                ];
                }
            }
            
        }
        $chucks = array_chunk($data, 5000);
        foreach ( $chucks as $chunk ){
            ModelsIcons::insert($chunk);
        }
    }
}
