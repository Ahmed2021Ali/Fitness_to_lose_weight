<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Http\Resources\InfoUsers;
use App\Http\Resources\UserResource;
use App\Models\Info;
use App\Models\User;

class InfoController extends Controller
{
    // اخر سوال المفروض يتسأل للمستخدم علشان احدد الحالة بناءا عليها, و علشان برضو اقولة في انتظار انشاء الخطة بتاعتك
    public function store(InfoRequest $request)
    {
        // Store weight , height  ,  status_info  for user
        $user = $request->user();
        if ($request['weight'] && $request['weight'] !== null) {
            $user->update(['weight' => $request['weight']]);
        } elseif ($request['height'] && $request['height'] !== null) {
            $user->update(['height' => $request['height']]);
        } elseif ($request['age'] && $request['age'] !== null) {
            $user->update(['age' => $request['age']]);
        } elseif ($request['diseases'] && $request['diseases'] !== null) {
            $user->update(['diseases' => $request['diseases']]);
        } else {
            if ($request['answer_id'] && $request['question_id'] && isset($request['question_id']) !== null && isset($request['answer_id']) !== null) {
                // receive id only
                $info_exist = Info::where('answer_id', $request['answer_id'])->where('question_id', $request['question_id'])->where('user_id', $user->id)->first();
                if (!$info_exist) {
                    Info::create([
                        'user_id' => $user->id, 'question_id' => $request['question_id'],
                        'answer_id' => $request['answer_id'],
                    ]);
                } else {
                    $info_exist->update([
                        'user_id' => $user->id, 'question_id' => $request['question_id'],
                        'answer_id' => $request['answer_id'],
                    ]);
                    return response()->json(['status' => true, 'questions' => 'The selection has been updated successfully']);
                }
            } else {
                return response()->json(['status' => false, 'questions' => 'must be enter question id and answer id OR Weight OR Height']);
            }
        }
        return response()->json(['true' => true, 'questions' => 'Continue answering questions to create the best diet']);
    }

    // if conditions status == 1 get data
    public function showAllInfo()
    {
        $users = User::all();
        return response()->json(['status' => true, 'users' => InfoUsers::collection($users)]);
    }
}
