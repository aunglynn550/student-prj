<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

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
            'name' => 'Blog1',
            'description' => 'some text here..',
            'image'=>'blog1.jpg',
            ]);

           
            \App\Models\Blog::create([
                'name' => 'Blog2',
                'description' => 'some text here..',
                'image'=>'blog2.jpg',
                ]);
                \App\Models\Blog::create([
                    'name' => 'Blog3',
                    'description' => 'some text here..',
                    'image'=>'blog3.jpg',
                    ]);
                    \App\Models\Blog::create([
                        'name' => 'Blog4',
                        'description' => 'some text here..',
                        'image'=>'blog4.jpg',
                        ]);
                        \App\Models\Blog::create([
                            'name' => 'Blog5',
                            'description' => 'some text here..',
                            'image'=>'blog5.jpg',
                            ]);
    }
}
