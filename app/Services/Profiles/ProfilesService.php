<?php

namespace App\Services\Profiles;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ProfilesService
{


    public static function getAllProfiles(): Collection
    {

        return User::with('profile')
            ->where('id', '!=', auth()->id())
            ->get();
    }

    public static function getProfileBio(int $user_id): string
    {
        $user = User::with('profile')->find($user_id);

        if (!$user) return '';


        if (!$user->profile) return 'Здесь пока что пусто...';

        return $user->profile->bio;
    }


    public static function getProfile(int $user_id): Collection
    {
        return User::all()->where('id', $user_id);
    }


}
