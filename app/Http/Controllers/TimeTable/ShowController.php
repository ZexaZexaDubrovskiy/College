<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\TimeTable;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $currentGroup = Group::findOrFail($id);
        $timetables = TimeTable::all();

        //delete
        $timetables = TimeTable::orderBy('date_time_table_id', 'asc')->orderBy('lesson_id', 'asc')->get();


        return view('timetable.show', compact('currentGroup'), compact('timetables', 'id'));
    }
}
