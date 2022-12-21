<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;


class indexController extends Controller
{
    public function __invoke()
    {
        return view('main.hostel');
    }
}
