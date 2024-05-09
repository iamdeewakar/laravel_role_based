<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function register(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'role' => 'required|in:user,admin'
    ]);

    $user = new User();
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->role = $request->input('role');
    $user->save();

    auth()->login($user);

    return $user->role == 'admin' ? redirect()->route('admin.dashboard') : redirect()->route('user.dashboard');
}
}
