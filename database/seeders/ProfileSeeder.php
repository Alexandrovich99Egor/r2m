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
        User::all()->each(function ($user) {
            Profiles::create([
                'user_id' => $user->id,
                'bio' => fake()->paragraph(2),
                'skills' => 'Laravel, Vue, Tailwind'
            ]);
        });

    }
}
