<?php

namespace App\Services\Contact;

use App\Models\Contact;

class Service {

    public function store($data){
        $file = $data['avatar'];
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = $file->getClientOriginalName();
        $data['avatar'] = $filecontent;
        Contact::create($data);
    }

    public function update($contact, $data){
        $file = $data['avatar'];
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = $file->getClientOriginalName();
        $data['avatar'] = $filecontent;

        $contact->update($data);
    }
}
