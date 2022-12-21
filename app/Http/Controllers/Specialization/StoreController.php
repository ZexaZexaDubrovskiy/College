<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Specialization\StoreRequest;
use App\Models\Specialization;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('specialization.index');
    }
}
