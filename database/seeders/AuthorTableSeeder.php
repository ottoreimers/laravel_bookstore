<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create(array(
            'id' => 1,
            'firstname' => 'George',
            'surname' => 'Orwell',

        ));

        Author::create(array(
            'id' => 2,
            'firstname' => 'Stephen',
            'surname' => 'King',

        ));

        // Author::factory()->count(10)->create();
    }
}
