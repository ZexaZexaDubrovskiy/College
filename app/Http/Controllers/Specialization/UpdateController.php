<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Specialization\UpdateRequest;
use App\Models\Specialization;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request)
    {
        $specialization = Specialization::findOrFail($id);
        $data = $request->validated();
        $this->service->update($specialization, $data);
        return redirect()->route('specialization.show', $specialization->id);
    }
}
