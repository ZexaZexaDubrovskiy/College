<?php

namespace App\Services\TimeTable;

use App\Models\TimeTable;

class Service {

    public function store($data){
        TimeTable::create($data);
    }

    public function update($timeTable, $data){
        $timeTable->update($data);
    }
}
