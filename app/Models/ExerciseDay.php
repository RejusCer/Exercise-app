<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseDay extends Model
{
    use HasFactory;

    protected $table = 'exercise_days';

    protected $fillable = [
        'name',
    ];

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'exercise_day_id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_exercise_days')->using(User_ExerciseDay::class); // ->withPivot(['week_days])
    }
}
