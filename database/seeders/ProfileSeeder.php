<?php

namespace Database\Seeders;

use App\Models\Profiles;
use App\Models\User;
use Illuminate\Database\Seeder;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::with('profile')->get()->each(fn($user) => $user->profile()->create(
            [
                'user_id' => $user->id,
                'bio' => fake()->sentence(),
                'skills' => 'PHP, Laravel, Vue',
                'user_link' => 'https://github.com/alex-kalanis'
            ]
        ));

    }
}
