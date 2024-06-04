<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        if ($user->height && $user->weight) {
            return response()->json(['plans' => PlanResource::collection($this->BMI($user->weight, $user->height))]);
        } else {
            return response()->json(['message' => 'Enter Your Height OR Weight  and try again', 'user' => $user]);
        }
    }


    public function store(Request $request, $id)
    {
        $plan = Plan::find($id);
        if ($plan) {
            $user = $request->user();
            $user->update(['plan_id' => $plan->id]);
            return response()->json(['message' => 'The plan was saved for ' . $user->name, 'plan' => new PlanResource($plan)]);
        } else {
            return response()->json(['message' => 'The plan does not exist']);
        }
    }


    public function BMI($weight, $height)
    {
        $BMI = ($weight / (($height / 100) * ($height / 100)));
        if ($BMI < 18.5) {
            return Plan::where('id', 3)->get();
        } elseif ($BMI >= 18.5 && $BMI <= 24.9) {
            return Plan::all();
        } else {
            return Plan::where('id', '!=', 3)->get();
        }
    }


}
