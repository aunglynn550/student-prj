<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Blog::create([
            'title' => 'Iron Spikes',
            'description' => '4th - 6th Century AD (pyu period)
            Found at Gate ways of Sri Ksetra,pyay township.
            Iron rings, hooks and nails are belived to have been installed in the large wooden
            door of city gates, it is believed that iron can be protect against evil.',
            'image'=>'blog7.jpg',
            'breadth'=>'',
            'thickness'=>'',
            'diameter'=>'',
            'height'=>'',
            'weight'=>'',
            'length'=>'',
            'year'=>'',
            'categories_id'=>2,
            'ages_id'=>1,
            'date' => Carbon::create('2000', '01', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);

           
        \App\Models\Blog::create([
            'title' => 'Ring with seated posture of Goddess(1,2)',
            'description' => '7th -8th Century A.D (pyu period)
            Donated by U Sein Tun and U Nyan Maung, Hmaza Village, Sri Ksetra,
            Pyay Township, Used as ornament.',
            'image'=>'blog2.jpg',
            'breadth'=>'',
            'thickness'=>'',
            'diameter'=>'(2)cm/(2.1)cm',
            'height'=>'',
            'weight'=>'(7.45)g/(8.04)g',
            'length'=>'',
            'year'=>'',
            'categories_id'=>1,
            'ages_id'=>1,
            'date' => Carbon::create('2000', '01', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
    
        \App\Models\Blog::create([
            'title' => 'Lotus Flower',
            'description' => '5th-7th Century A.D(pyu period)
            Found at Site HMA-31 (A,B), Sri Ksetra, Pyay Township in 22.3.2011. Used
            as ornament.',
            'image'=>'blog3.jpg',
            'breadth'=>'',
            'thickness'=>'',
            'diameter'=>'(3)cm',
            'height'=>'',
            'weight'=>'(1.57)g',
            'length'=>'',
            'year'=>'',
            'categories_id'=>1,
            'ages_id'=>1,
            'date'=>Carbon::create('2000', '01', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
                
        \App\Models\Blog::create([
            'title' => 'Ring with the Bhaddapiha Motif and Ring with Conch',
            'description' => '5th-6th Century A.D(Pyu Period)
            Donated by U Kin Myint and U Kaing, Pyay, Used as ornament',
            'image'=>'blog4.jpg',
            'breadth'=>'',
            'thickness'=>'',
            'diameter'=>'(1.7)cm/(2)cm',
            'height'=>'',
            'weight'=>'(2.63)g/(11.38)g',
            'length'=>'',
            'year'=>'',
            'categories_id'=>1,
            'ages_id'=>1,
            'date'=>Carbon::create('2000', '01', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
                        ]);
        \App\Models\Blog::create([
            'title' => 'Ring with Floral Motif',
            'description' => '5th-6th Century A.D (Pyu Period)
            Donated by U Nyan Maung, Hmawza Village, Sri Ksetra, Pyay Township.
            Use as omament.',
            'image'=>'blog5.jpg',
            'breadth'=>'',
            'thickness'=>'',
            'diameter'=>'(2.6)cm',
            'height'=>'',
            'weight'=>'(10.55)g',
            'length'=>'',
            'year'=>'1991',
            'date'=>Carbon::create('2000', '01', '01'),
            'categories_id'=>1,
            'ages_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
        \App\Models\Blog::create([
            'title' => 'Plate with Pyu Scripts',
            'description' => '8th-9th Century A.D (pyu period)
            Donated by Daw Than Myint, Taunglonenyo Village, Sri Ksetra, Pyay
            Township, Used to put the meals.',                    
            'image'=>'blog6.jpg',
            'breadth'=>'',
            'thickness'=>'',
            'diameter'=>'(18.5)cm',
            'height'=>'',
            'weight'=>'',
            'length'=>'',
            'year'=>'',
            'categories_id'=>1,
            'ages_id'=>1,
            'date'=>Carbon::create('2000', '01', '01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),                                
            ]);                                                                                                
    }
}
