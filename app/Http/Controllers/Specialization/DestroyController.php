<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Models\Specialization;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $specialization = Specialization::findOrFail($id);
        $specialization->delete();
        return redirect()->route('specialization.index');
    }
}
