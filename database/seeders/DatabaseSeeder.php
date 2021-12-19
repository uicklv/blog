<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Post;
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
         \App\Models\User::factory(10)->create();
         Post::factory(10)->create();
         AdminUser::factory(1)->create([
             "name" => "Admin",
             "email" => "admin@gmail.com",
         ]);
    }
}
