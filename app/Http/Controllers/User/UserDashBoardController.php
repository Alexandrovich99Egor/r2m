<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UploadAvatar\UploadAvatarService;

class UserDashBoardController extends Controller
{
    //

    public function store(Request $request, UploadAvatarService $uploadAvatarService): \Illuminate\Http\JsonResponse
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
