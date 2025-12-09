<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Profiles\ProfilesService;
use Illuminate\View\View;

class DashboadController extends Controller
{
    //

    public function index(): View
    {

        $profileBio = ProfilesService::getProfileBio(auth()->id());
        $usersProfiles = ProfilesService::getAllProfiles();


        return view('dashboard', compact('profileBio', ['usersProfiles']));
    }


}
