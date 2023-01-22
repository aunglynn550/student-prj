<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Age;
use Carbon\Carbon;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Age::create([
            'name'=>'Pyu',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
