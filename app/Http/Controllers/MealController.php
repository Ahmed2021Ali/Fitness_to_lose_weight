<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        if ($user->plan_id) {
            return response()->json(['status' => true, 'meals' => $user->plan->meals]);
        } else {
            return response()->json(['status' => false, 'message' => 'The meal does not exist']);
        }
    }

}
