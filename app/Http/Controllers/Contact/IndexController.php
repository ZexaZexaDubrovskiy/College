<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }
}
