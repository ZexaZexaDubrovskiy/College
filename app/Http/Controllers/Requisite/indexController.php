<?php

namespace App\Http\Controllers\Requisite;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.requisite');
    }
}
