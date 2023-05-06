<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Models\TimeTable;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('timetable.create');
    }
}
