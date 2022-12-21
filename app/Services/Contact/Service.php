<?php

namespace App\Services\Contact;

use App\Models\Contact;

class Service {

    public function store($data){
        Contact::create($data);
    }

    public function update($contact, $data){
        $contact->update($data);
    }
}
