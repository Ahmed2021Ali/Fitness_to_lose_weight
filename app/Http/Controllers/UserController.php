<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlanResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request)
    {
        $user = $request->user();
        return response()->json(['status' => true, 'users' => new UserResource($user)]);
    }

    public function getAllUser()
    {
        $users = User::all();
        return response()->json(['status' => true, 'users' => UserResource::collection($users)]);
    }

    public function plan(Request $request)
    {
        $user = $request->user();
        return response()->json(['plan' => new PlanResource($user->plan)]);
    }
}
