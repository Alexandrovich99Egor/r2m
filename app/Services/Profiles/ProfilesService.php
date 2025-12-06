<?php

namespace App\Services\Profiles;

use App\Models\User;

class ProfilesService
{


    public static function getProfileBio(int $user_id): string
    {
        $user = User::with('profile')->find($user_id);

        if (!$user) return '';


        return $user->profile->bio;
    }


}
