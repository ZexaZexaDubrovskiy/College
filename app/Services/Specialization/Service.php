<?php

namespace App\Services\Specialization;

use App\Models\Specialization;

class Service {

    public function store($data){
        Specialization::create($data);
    }

    public function update($specialization, $data){
        $specialization->update($data);
    }
}
