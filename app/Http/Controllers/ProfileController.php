<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user_name)
    {
        $user=User::whereUser_name($user_name)->first();

        return view('profile.index', compact('user'));

    }
}
