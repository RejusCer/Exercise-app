<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class User_ExerciseDay extends Pivot
{
    use HasFactory;

    protected $table = 'users_exercise_days';

    protected $fillable = [
        'user_id',
        'exercise_day_id',
        'week_days'
    ];


}
