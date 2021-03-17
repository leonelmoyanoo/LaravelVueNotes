<?php

namespace Database\Seeders;

use App\Models\{User, Note};
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
        User::factory()->create([
            'email' => 'leonelmoyano1809@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        Note::factory(30)->create();
    }
}
