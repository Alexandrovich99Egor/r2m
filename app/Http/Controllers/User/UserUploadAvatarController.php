<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\UploadAvatar\UploadAvatarService;
use Illuminate\Http\Request;

class UserUploadAvatarController extends Controller
{
    //
    public function store(Request $request, UploadAvatarService $uploadAvatarService)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $path = $uploadAvatarService->uploadAvatar($request->file('avatar'));

        return response()->json([
            'message' => 'Avatar Uploaded Successfully',
            'path' => $path,
            'url' => asset('storage/' . $path),
        ]);
    }
}
