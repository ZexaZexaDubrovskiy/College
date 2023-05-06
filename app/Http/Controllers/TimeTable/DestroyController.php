<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Models\TimeTable;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $timetable = TimeTable::findOrFail($id);
        $timetable->delete();
        return redirect()->route('timetable.index');
    }
}
