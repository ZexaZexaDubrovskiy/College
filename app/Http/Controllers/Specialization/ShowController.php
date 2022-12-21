<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Models\Specialization;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $specialization = Specialization::findOrFail($id);
        return view('specialization.show', compact('specialization'));
    }
}
