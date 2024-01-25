<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{


public function show()
{
    $user = auth()->user();
    return view('users.profile', compact('user'));
}

}
