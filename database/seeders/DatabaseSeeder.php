<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Division;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // Divison
        Division::create([
            'name' => 'Pengurus Inti',
            'slug' => 'pengurus-inti',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);

        Division::create([
            'name' => 'Sie Dana',
            'slug' => 'sie-dana',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);

        Division::create([
            'name' => 'Sie Acara',
            'slug' => 'sie-acara',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);

        Division::create([
            'name' => 'Sie Pubdok',
            'slug' => 'sie-pubdok',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);

        Division::create([
            'name' => 'Sie Content Creator',
            'slug' => 'sie-content-creator',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);

        Division::create([
            'name' => 'Sie Public Relation',
            'slug' => 'sie-public-relation',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);

        Division::create([
            'name' => 'Sie Doa',
            'slug' => 'sie-doa',
            'jobdesk' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque nihil officiis temporibus incidunt ea.'
        ]);
    }
}
