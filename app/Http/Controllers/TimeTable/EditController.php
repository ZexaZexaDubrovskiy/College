<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\TimeTable;
class EditController extends Controller
{
    public function __invoke($timetable, $idGroup)
    {
        $timetable = TimeTable::findOrFail($timetable);
        $currentGroup = Group::findOrFail($idGroup);
        return view('timetable.edit', compact('timetable'), compact('currentGroup'));
    }
}
