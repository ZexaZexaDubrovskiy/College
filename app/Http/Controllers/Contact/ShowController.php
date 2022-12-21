<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.show', compact('contact'));
    }
}
