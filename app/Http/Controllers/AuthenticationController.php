<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    /* Register a new user */
    public function register(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        return response()->json(['status' => true, 'message' => 'User Created Successfully',
            'token' => $user->createToken("User Token")->plainTextToken, 'user' => $user,
        ], 201);
    }


    /* Login a  user */
    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        } else {
            $user = User::where('email', $request->email)->first();
            return response()->json(['status' => true, 'message' => 'User Login  Successfully',
                'token' => $user->createToken("User Token")->plainTextToken, 'user' => $user,
            ], 201);
        }
    }

    /* Update  user */
    public function update(UpdateUserRequest $request)
    {
        $user = $request->user();
        $user->update($request->validated());
        return response()->json(['message' => 'User Update Successfully','user' => new UserResource($user)], 200);
    }


    /* Log out Account   */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['status' => true, 'message' => 'user logged out',]);
    }


    /* delete Account */
    public function delete(Request $request)
    {
        $request->user()->delete();
        return response()->json(['status' => true, 'message' => 'delete account successfully'], 201);
    }
    public function getUser(Request $request)
    {
        $user=$request->user();
       // dd($user);
        return response()->json(['message' => 'User Update Successfully','user' => new UserResource($user)], 200);
    }

}
