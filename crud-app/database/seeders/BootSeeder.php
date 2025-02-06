<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boot = new \App\Models\Boots([
            'name' => 'Boot 1',
            'description' => 'This is boot 1',
            'brand' => 'Brand 1',
        ]);
        $boot->save();
        $boot = new \App\Models\Boots([
            'name' => 'Boot 1',
            'description' => 'This is boot 1',
            'brand' => 'Brand 1',
        ]);
        $boot->save();
        $boot = new \App\Models\Boots([
            'name' => 'Boot 1',
            'description' => 'This is boot 1',
            'brand' => 'Brand 1',
        ]);
        $boot->save();
        $boot = new \App\Models\Boots([
            'name' => 'Boot 1',
            'description' => 'This is boot 1',
            'brand' => 'Brand 1',
        ]);
        $boot->save();
        $boot = new \App\Models\Boots([
            'name' => 'Boot 1',
            'description' => 'This is boot 1',
            'brand' => 'Brand 1',
        ]);
        $boot->save();
        $boot = new \App\Models\Boots([
            'name' => 'Boot 1',
            'description' => 'This is boot 1',
            'brand' => 'Brand 1',
        ]);
        $boot->save();
    }
}
