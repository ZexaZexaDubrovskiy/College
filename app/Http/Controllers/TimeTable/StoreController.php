<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Http\Requests\TimeTable\StoreRequest;
use App\Models\TimeTable;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        $group = \Illuminate\Support\Facades\DB::table('groups')->first();
        return redirect()->route('timetable.show', $group->id);
    }
}
