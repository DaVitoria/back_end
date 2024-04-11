<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question_quizze extends Model
{
    use HasFactory;
    protected $fillable =[
        'quizz_id',
        'question',
        'type',
        
    ];

    public function quizz(){
        return $this->belongsTo(Quizz::class);
    }

}
