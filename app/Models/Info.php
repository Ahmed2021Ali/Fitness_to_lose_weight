<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'question_id', 'answer_id','weight', 'height', 'status_info'];
    protected $table = 'infos';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function Answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
