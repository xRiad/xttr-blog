<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutModel;
// use Intervention\Image\Facades\Image;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutModel::firstOrCreate([
            'img' => 'about_1.jpg',
            'title' => 'About this xtra blog',
            'about_content' => '
                <p>
                    You can immediately download 
                        <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog Template</a> 
                        from TemplateMo website for 100% free of charge. Etiam vehicula, tortor ac eleifend tincidunt, diam neque pellentesque ipsum, 
                        a geugiat eros mauris eget lorem. Quisque in
                    bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. Aliquam lorem mi, maximus at iaculis ut, viverra vel
                    mauris. Duis congue luctus metus, sodales tincidunt lectus fringilla ut. Nunc tempus at magna sed vestibulum.
                </p>
                <p>
                    Proin et arcu ligula. Praesent quis erat eu est solliditudin tristique ut in arcu. Donec bibendum ex id ligula semper dictum.
                    Proin malesuada luctus auctor. Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in
                    malesuada nulla magna ut enim. Morbi lacinia magna sed sapien auctor, vitae luctus nunc cursus.
                </p>                            
            '
        ]);
    }
}
