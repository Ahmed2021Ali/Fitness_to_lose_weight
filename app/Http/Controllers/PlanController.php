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
        if ($user->age >= 18 && $user->age <= 24) {
            $plans = Plan::where('age', '18-24')->get();
            return response()->json(['status' => false, 'plans' => PlanResource::collection($plans)]);
        } elseif ($user->age >= 25 && $user->age <= 40) {
            $plans = Plan::where('age', '25-40')->get();
            return response()->json(['status' => false, 'plans' => PlanResource::collection($plans)]);
        } elseif ($user->age >= 41 && $user->age <= 60) {
            $plans = Plan::where('age', '41-60')->get();
            return response()->json(['status' => false, 'questions' => PlanResource::collection($plans)]);
        } else {
            return response()->json(['status' => false, 'plan' => 'There is no plan for this age group']);
        }
    }

    public function store(Request $request, $id)
    {
        $plan = Plan::find($id);
        if ($plan) {
            $user = $request->user();
            $user->update(['plan_id' => $plan->id]);
            return response()->json(['status' => true, 'message' => 'The plan was registered bin']);
        } else {
            return response()->json(['status' => false, 'message' => 'The plan does not exist']);
        }
    }

    public function storePlan(Request $request)
    {
        dd($request->all());
    }

}
