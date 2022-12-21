<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Models\Specialization;

class IndexController extends Controller
{
    public function __invoke()
    {
        //подумай
        $specialties = Specialization::all();
        return view('specialization.index', compact('specialties'));
    }
}
