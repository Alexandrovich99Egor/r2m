<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Services\Profiles\ProfilesService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfilesController extends Controller
{
    //
    

    public function single($id): View
    {

        $profile = ProfilesService::getProfile($id);

        return view('profile', compact('profile'));
    }


}
