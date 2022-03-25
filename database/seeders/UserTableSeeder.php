<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // יצירת data מזוייף
        User::factory()->count(50)->create()->each(function($user){
            $user->articles()->saveMany(Article::factory()->count(3)->make());
        });
        //factory(User::class, 100)->create();
    }
}
