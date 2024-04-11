<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support_material extends Model
{
    use HasFactory;
    protected $fillable =[
        'lesson_id',
        'name',
        'material_type',
        'link_material',
       
    ];
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

}
