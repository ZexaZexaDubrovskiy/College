<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Hostel\BaseController;
use App\Http\Requests\Hostel\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($id, $data);
        return redirect()->route('hostel.index');
    }
}
