<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Schedule;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function create() {
        return view('schedules.create');
    }

    public function store(Request $request) {
        
        $schedule = new Schedule();

        $schedule->title = $request->title;
        $schedule->description = $request->title;
        $schedule->user_id = Auth::id();

        $schedule->save();

        return redirect()->route('records.create', ['id' => $schedule->id]);
    }

    public function show(Request $request) {
        
        $schedule = Schedule::find($request->id);
        $records = Record::where('schedule_id', $schedule->id)->get();

        return view('schedules.show', ['schedule' => $schedule, 'records' => $records]);
    }
}
