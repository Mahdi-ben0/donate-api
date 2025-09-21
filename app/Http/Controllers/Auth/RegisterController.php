<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
   public function register(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone_number'=> 'required|string|max:14',
            'gender' => 'nullable|string|in:male,female',
            'birthday' => 'nullable|date',
            'profile_picture' => 'nullable|file|image|max:4096',
        ]);

        if($request->hasFile('profile_picture')){
            $profile_picture = $request->file('profile_picture');
            $profile_picture_path = $profile_picture->store('profile_pictures', 'public');
        }else{
            $profile_picture_path = null;
        }

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'type' => 'user',
            'gender' => $validated['gender'] ?? null,
            'birthday' => $validated['birthday'] ?? null,
            'profile_picture' => $profile_picture_path,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'type' => $user->type,
            ],
        ]);
    }

}
