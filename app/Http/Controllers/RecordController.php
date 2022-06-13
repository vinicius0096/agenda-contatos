<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Record;
use App\Models\Schedule;

class RecordController extends Controller
{
    public function create() {
        return view('records.create');
    }

    public function store(Request $request) {

        $record = new Record();

        $record->name = $request->name;
        $record->email = $request->email;
        $record->phone = $request->phone;
        $record->github_url = $request->github_url;
        $record->schedule_id = $request->id;

        $record->save();

        return redirect()->route('schedules.show', ['id' => $request->id]);
    }

    public function show(Request $request) {
        $record = Record::find($request->id);
        $response = Http::get('https://api.github.com/users/'.$record->github_url.'/repos');

        return view('records.show', ['record' => $record, 'repositories' => $response->body()]);
    }
}
