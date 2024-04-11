<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;
    protected $fillable =[
        'module_id',
        'title',
        'description',
        'lesson_number',
        'plataform',
        'video_link'
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }

}
