<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('contact.create');
    }
}
