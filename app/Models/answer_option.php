<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer_option extends Model
{
    use HasFactory;
    protected $fillable =[
        'question_quizze_id',
        'options',
        'correct',
        
    ];

    public function question_quizze(){
    return $this->belongsTo(Question_quizze::class);
    }


}
