<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create();
        $user1 = User::findOrFail(1);
        $user1->name = 'Alice';
        $user1->email = 'alice@example.com';
        $user1->save();

        $user2 = User::findOrFail(2);
        $user2->name = 'hina';
        $user2->email = 'hina@example.com';
        $user2->save();

        $user3 = User::findOrFail(3);
        $user3->name = 'mika';
        $user3->email = 'mika@example.co';
        $user3->save();
    }
}
