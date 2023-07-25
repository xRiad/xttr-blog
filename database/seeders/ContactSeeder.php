<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactModel;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactModel::firstOrCreate([
            'adress' => '120 Lorem ipsum dolor sit amet, consectetur adipiscing 10550',
            'phone' => '060-070-0980',
            'email' => 'info@company.com',
            'info' => 'Maecenas eu mi eu dui cursus consequat non eu metus. Morbi ac turpis eleifend, commodo purus eget, commodo mauris.',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'linkedin' => ''
        ]);
    }
}
