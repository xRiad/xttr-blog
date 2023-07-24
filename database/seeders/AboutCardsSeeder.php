<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutCardModel;

class AboutCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $data = [
            [
                'title' => 'Background',
                'content' => '
                    Phasellus pulvinar nisl ornare leo porttitor, et vestibulum lorem semper. 
                    Duis risus ex, molestie sit amet magna in,
                    pharetra pellentesque est. Curabitur elit metus.
                ',
                'icon' => 'fas fa-bezier-curve fa-4x tm-color-primary'
            ],
            [
                'title' => 'Teamwork',
                'content' => '
                    Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in malesuada nulla magna ut enim. 
                    Morbi lacinia magna sed auctor, vitae nunc cursus.
                ',
                'icon' => 'fas fa-users-cog fa-4x tm-color-primary'
            ],
            [
                'title' => 'Our Core Value',
                'content' => 'Nunc mi ante, suscipit vel dapibus et, volutpat sit amet ante. In tempor nec sem vitae varius. Aliquam tincidunt orci sem, et imperdiet massa consectetur nec.',
                'icon' => 'fab fa-creative-commons-sampling fa-4x tm-color-primary'
            ]
        ];

        AboutCardModel::insert($data);        
    }
}
