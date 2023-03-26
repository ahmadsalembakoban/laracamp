<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'gila belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
            ],
            [
                'title' => 'baru mulai',
                'slug' => 'baru-mulai',
                'price' => 120,
            ],

        ];  

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
