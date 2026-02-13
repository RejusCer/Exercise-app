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

    public function store(Request $request){
        $request->validate([
            "name" => "required|string|max:255",
        ]);

        $exerciseDay = ExerciseDay::create([
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard')->with('success', 'Pratimo dienos planas sėkmingai sukurtas!');
    }
}
