<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Category::create([
            'name'=>'Gold',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        \App\Models\Category::create([
            'name'=>'Silver',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        \App\Models\Category::create([
            'name'=>'Terracotta',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        \App\Models\Category::create([
            'name'=>'Circumference',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);        
    }
}
