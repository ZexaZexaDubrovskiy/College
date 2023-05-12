<?php

namespace App\Http\Controllers\ProfessionalTrainingCourse;

use App\Http\Controllers\ProfessionalTrainingCourse\BaseController;
use App\Http\Requests\ProfessionalTrainingCourse\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($id, $data);
        return redirect()->route('professionaltrainingcourses.index');
    }
}
