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
        return view('timetable.show', compact('currentGroup'), compact('timetables', 'id'));
    }
}
