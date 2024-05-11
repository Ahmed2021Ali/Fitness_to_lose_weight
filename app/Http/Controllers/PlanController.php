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
        foreach ($user->info as $info) {
            if ($info->question_id === 1) {
                foreach ($info->question->answers as $answer) {
                    if ($answer->id === 1) {
                        $plans = Plan::where('age', '18-25')->get();
                        return response()->json(['plans' => PlanResource::collection($plans)]);
                    } elseif ($answer->id === 2) {
                        $plans = Plan::where('age', '26-35')->get();
                        return response()->json(['plans' => PlanResource::collection($plans)]);
                    } elseif ($answer->id === 3) {
                        $plans = Plan::where('age', '36-45')->get();
                        return response()->json(['questions' => PlanResource::collection($plans)]);
                    } elseif ($answer->id === 4) {
                        $plans = Plan::where('age', '+46')->get();
                        return response()->json(['questions' => PlanResource::collection($plans)]);
                    } else {
                        return response()->json(['plan' => 'There is no plan for this age group']);
                    }
                }
            }
        }
        return response()->json(['message' => 'Age Not Found']);
    }

    public function store(Request $request, $id)
    {
        $plan = Plan::find($id);
        if ($plan) {
            $user = $request->user();
            $user->update(['plan_id' => $plan->id]);
            return response()->json(['status' => true, 'message' => 'The plan was saved for '.$user->name, 'plan' => new PlanResource($plan)]);
        } else {
            return response()->json(['status' => false, 'message' => 'The plan does not exist']);
        }
    }

}
