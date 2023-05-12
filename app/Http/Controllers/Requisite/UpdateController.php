<?php

namespace App\Http\Controllers\Requisite;

use App\Http\Controllers\Requisite\BaseController;
use App\Http\Requests\Requisite\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($id, $data);
        return redirect()->route('requisite.index');
    }
}
