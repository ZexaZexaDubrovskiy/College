<?php

namespace App\Http\Controllers\ProfessionalTrainingCourse;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.professionaltrainingcourses');
    }
}
