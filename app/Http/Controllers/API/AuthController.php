<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        request()->validate([
            'name' => 'required|string',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $admin = new User;
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->password = Hash::make(request('password'));
        $admin->save();

        return response()->json([
            'message' => 'akun admin berhasil dibuat silahkan login',
            'data' => $admin
        ], 200);
    }

    public function login()
    {
        $admin = User::where('email', request('email'))->first();

        if (!$admin || !Hash::check(request('password'), $admin->password)) {
            return response()->json([
                'error' => 'Email atau password salah'
            ], 401);
        }

        $token = $admin->createToken('token')->plainTextToken;

        return response()->json([
            'message' => 'berhasil login',
            'user' => $admin,
            'token' => $token
        ], 200);
    }

    public function logout()
    {
        $user = request()->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'berhasil logout'
        ]);
    }
}
