<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Http\Requests\TimeTable\UpdateRequest;
use App\Models\TimeTable;
use Illuminate\Http\Request;


class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request)
    {
        $timetable = TimeTable::findOrFail($id);
        $data = $request->validated();
        $this->service->update($timetable, $data);
        return redirect()->route('timetable.show', $data['group_id']);
    }
}
