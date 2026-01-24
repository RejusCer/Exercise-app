<?php

namespace App\Http\Controllers;

use App\Models\ExerciseDay;
use Illuminate\Http\Request;

class ExerciseDayController extends Controller
{
    public function index(){
        $exercise_day_plans = ExerciseDay::all();

        return view('dashboard', compact('exercise_day_plans'));
    }
}
