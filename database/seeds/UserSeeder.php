<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class)->create([
            "name" => "Stone Cold",
            "username" => "ann",
            "email" => "ann@example.com",
            "password" => bcrypt("secret")
        ]);
        factory(User::class)->create([
            "name" => "Michael",
            "username" => "michael",
            "email" => "michael@example.com",
            "password" => bcrypt("password")
        ]);
    }
}
