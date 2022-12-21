<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
