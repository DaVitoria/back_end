<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
  
    use HasFactory;
    protected $fillable = [
        'user_id',
        'course_id',
        'date_registration',
        'validate_until',
        'status',
        
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    
}
