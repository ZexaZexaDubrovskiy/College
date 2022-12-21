<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\UpdateRequest;
use App\Models\Contact;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request)
    {
        $contact = Contact::findOrFail($id);
        $data = $request->validated();
        $this->service->update($contact, $data);
        return redirect()->route('contact.show', $contact->id);
    }
}
