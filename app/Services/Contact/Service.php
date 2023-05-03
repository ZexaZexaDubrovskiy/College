<?php

namespace App\Services\Contact;

use App\Models\Contact;

class Service {

    public function store($data){

        $file = $data['avatar']; // inputname - это name поля из формы

        $filecontent = $file->openFile()->fread($file->getSize()); // эта магия из стэковерфлоу
//что за openFile() - я не понимаю...
        $filename = $file->getClientOriginalName();  // getClientOriginalName() - тоже какой-то секретный
//метод))) в документации его нет)) но это работает!))
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
