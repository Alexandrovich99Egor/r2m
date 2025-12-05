<?php

namespace App\Services\UploadAvatar;

class UploadAvatarService
{
    public function uploadAvatar($file)
    {

        if (!$file->isValid()) return false;

        $path = $file->store('avatars', 'public');

        $user = auth()->user();
        $user->avatar = $path;
        $user->save();

        return $path;


    }
}
