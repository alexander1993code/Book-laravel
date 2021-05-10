<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Database\Factories\PostFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => 'Alexander Salazar',
            'email' => 'alex@alex.com',
            'password' => bcrypt('123456')
        ]);

        Post::factory(24)->create();

       
    }
}

