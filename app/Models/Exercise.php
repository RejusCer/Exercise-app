<?php

namespace App\Models;

use App\Models\ExerciseDay;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';

    protected $fillable = [
        'is_current',
        'name',
        'weight',
        'sets',
        'reps',
        'exercise_day_id',
        'image_path',
    ];

    public function exerciseDay()
    {
        return $this->belongsTo(ExerciseDay::class, 'exercise_day_id');
    }
}
