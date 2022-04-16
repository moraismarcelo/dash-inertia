<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all()
        ]);
    }

    public function form($user_id = null)
    {
        if($user_id){
            $user = User::findOrFail($user_id);
        }

        return Inertia::render('Users/Form', [
            'user' => $user ?? null
        ]);
    }
}
