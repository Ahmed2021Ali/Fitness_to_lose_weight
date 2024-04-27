<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request)
    {
        $user = $request->user();
        return response()->json(['status' => true, 'users' =>new UserResource($user)]);
    }
}
