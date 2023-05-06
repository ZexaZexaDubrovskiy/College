<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Models\TimeTable;

class IndexController extends Controller
{
    public function __invoke()
    {
        $timetables = TimeTable::all();
        return view('timetable.index', compact('timetables'));
    }
}
