<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Models\Specialization;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $specialization = Specialization::findOrFail($id);
        return view('specialization.edit', compact('specialization'));
    }
}
